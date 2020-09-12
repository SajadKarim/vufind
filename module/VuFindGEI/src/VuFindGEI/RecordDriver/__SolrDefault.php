<?php
/**
 * Default model for Solr records -- used when a more specific model based on
 * the record_format field cannot be found.
 *
 * PHP version 7
 *
 * Copyright (C) Villanova University 2010.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category VuFind
 * @package  RecordDrivers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:plugins:record_drivers Wiki
 */
namespace VuFind\RecordDriver;

/**
 * Default model for Solr records -- used when a more specific model based on
 * the record_format field cannot be found.
 *
 * This should be used as the base class for all Solr-based record models.
 *
 * @category VuFind
 * @package  RecordDrivers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:plugins:record_drivers Wiki
 *
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class SolrDefault extends \VuFind\RecordDriver\SolrDefault
{
    use HierarchyAwareTrait;

    /**
     * These Solr fields should be used for snippets if available (listed in order
     * of preference).
     *
     * @var array
     */
    protected $preferredSnippetFields = [
        'contents', 'topic'
    ];

    /**
     * These Solr fields should NEVER be used for snippets.  (We exclude author
     * and title because they are already covered by displayed fields; we exclude
     * spelling because it contains lots of fields jammed together and may cause
     * glitchy output; we exclude ID because random numbers are not helpful).
     *
     * @var array
     */
    protected $forbiddenSnippetFields = [
        'author', 'title', 'title_short', 'title_full',
        'title_full_unstemmed', 'title_auth', 'title_sub', 'spelling', 'id',
        'ctrlnum', 'author_variant', 'author2_variant', 'fullrecord'
    ];

    /**
     * These are captions corresponding with Solr fields for use when displaying
     * snippets.
     *
     * @var array
     */
    protected $snippetCaptions = [];

    /**
     * Should we include snippets in search results?
     *
     * @var bool
     */
    protected $snippet = false;

    /**
     * Highlighting details
     *
     * @var array
     */
    protected $highlightDetails = [];

    /**
     * Should we use hierarchy fields for simple container-child records linking?
     *
     * @var bool
     */
    protected $containerLinking = false;

    /**
     * Search results plugin manager
     *
     * @var \VuFindSearch\Service
     */
    protected $searchService = null;

    /**
     * Constructor
     *
     * @param \Laminas\Config\Config $mainConfig     VuFind main configuration (omit
     * for built-in defaults)
     * @param \Laminas\Config\Config $recordConfig   Record-specific configuration
     * file (omit to use $mainConfig as $recordConfig)
     * @param \Laminas\Config\Config $searchSettings Search-specific configuration
     * file
     */
    public function __construct($mainConfig = null, $recordConfig = null,
        $searchSettings = null
    ) {
        // Load snippet settings:
        $this->snippet = !isset($searchSettings->General->snippets)
            ? false : $searchSettings->General->snippets;
        if (isset($searchSettings->Snippet_Captions)
            && count($searchSettings->Snippet_Captions) > 0
        ) {
            foreach ($searchSettings->Snippet_Captions as $key => $value) {
                $this->snippetCaptions[$key] = $value;
            }
        }
        // Container-contents linking
        $this->containerLinking
            = !isset($mainConfig->Hierarchy->simpleContainerLinks)
            ? false : $mainConfig->Hierarchy->simpleContainerLinks;
        parent::__construct($mainConfig, $recordConfig, $searchSettings);
    }

    /**
     * Get the date this record was first indexed (if set).
     *
     * @return string
     */
    public function getFirstIndexed()
    {
        return $this->fields['first_indexed'] ?? '';
    }

    /**
     * Get highlighting details from the object.
     *
     * @return array
     */
    public function getHighlightDetails()
    {
        return $this->highlightDetails;
    }

    /**
     * Add highlighting details to the object.
     *
     * @param array $details Details to add
     *
     * @return void
     */
    public function setHighlightDetails($details)
    {
        $this->highlightDetails = $details;
    }

    /**
     * Get highlighted author data, if available.
     *
     * @return array
     */
    public function getRawAuthorHighlights()
    {
        // Don't check for highlighted values if highlighting is disabled:
        return ($this->highlight && isset($this->highlightDetails['author']))
            ? $this->highlightDetails['author'] : [];
    }

    /**
     * Given a Solr field name, return an appropriate caption.
     *
     * @param string $field Solr field name
     *
     * @return mixed        Caption if found, false if none available.
     */
    public function getSnippetCaption($field)
    {
        return isset($this->snippetCaptions[$field])
            ? $this->snippetCaptions[$field] : false;
    }

    /**
     * Pick one line from the highlighted text (if any) to use as a snippet.
     *
     * @return mixed False if no snippet found, otherwise associative array
     * with 'snippet' and 'caption' keys.
     */
    public function getHighlightedSnippet()
    {
        // Only process snippets if the setting is enabled:
        if ($this->snippet) {
            // First check for preferred fields:
            foreach ($this->preferredSnippetFields as $current) {
                if (isset($this->highlightDetails[$current][0])) {
                    return [
                        'snippet' => $this->highlightDetails[$current][0],
                        'caption' => $this->getSnippetCaption($current)
                    ];
                }
            }

            // No preferred field found, so try for a non-forbidden field:
            if (isset($this->highlightDetails)
                && is_array($this->highlightDetails)
            ) {
                foreach ($this->highlightDetails as $key => $value) {
                    if ($value && !in_array($key, $this->forbiddenSnippetFields)) {
                        return [
                            'snippet' => $value[0],
                            'caption' => $this->getSnippetCaption($key)
                        ];
                    }
                }
            }
        }

        // If we got this far, no snippet was found:
        return false;
    }

    /**
     * Get a highlighted title string, if available.
     *
     * @return string
     */
    public function getHighlightedTitle()
    {
        // Don't check for highlighted values if highlighting is disabled:
        if (!$this->highlight) {
            return '';
        }
        return (isset($this->highlightDetails['title'][0]))
            ? $this->highlightDetails['title'][0] : '';
    }

    /**
     * Attach a Search Results Plugin Manager connection and related logic to
     * the driver
     *
     * @param \VuFindSearch\Service $service Search Service Manager
     *
     * @return void
     */
    public function attachSearchService(\VuFindSearch\Service $service)
    {
        $this->searchService = $service;
    }

    /**
     * Get the number of child records belonging to this record
     *
     * @return int Number of records
     */
    public function getChildRecordCount()
    {
        // Shortcut: if this record is not the top record, let's not find out the
        // count. This assumes that contained records cannot contain more records.
        if (!$this->containerLinking
            || empty($this->fields['is_hierarchy_id'])
            || null === $this->searchService
        ) {
            return 0;
        }

        $safeId = addcslashes($this->fields['is_hierarchy_id'], '"');
        $query = new \VuFindSearch\Query\Query(
            'hierarchy_parent_id:"' . $safeId . '"'
        );
        // Disable highlighting for efficiency; not needed here:
        $params = new \VuFindSearch\ParamBag(['hl' => ['false']]);
        return $this->searchService
            ->search($this->sourceIdentifier, $query, 0, 0, $params)
            ->getTotal();
    }

    /**
     * Get the container record id.
     *
     * @return string Container record id (empty string if none)
     */
    public function getContainerRecordID()
    {
        return $this->containerLinking
            && !empty($this->fields['hierarchy_parent_id'])
            ? $this->fields['hierarchy_parent_id'][0] : '';
    }

        /**
	 * scheel
     * Get local classifications
     *
     * @return array
     */
    public function getLocalClassification()
    {
        $res = [];
		//'school_subject_anzsrc_hierarchical_str_mv', 'school_subject_gei_str_mv',	
		foreach (['school_subject_isced_hierarchical_str_mv', 'level_of_education_str_mv', 'document_type_str_mv', 'type_of_school_str_mv', 'country_of_use_hierarchical_str_mv'] as $field) {
			if (isset($this->fields[$field])) {
				//echo "<script>console.log('#php1#','" . json_encode($this->fields[$field]) . "')</script>"; //scheel
				$res[$field] = [];
				foreach ($this->fields[$field] as $f) {
					$res[$field][] = $f.'';
				}
				//echo "<script>console.log('#php3#','" . json_encode($res[$field]) . "')</script>"; //scheel
            }
        }
	    //echo "<script>console.log('#php3#','" . json_encode($res) . "')</script>"; //scheel
        $callback = function ($i) {
            return [$i];
        };
        return array_map($callback, $res);
    }

    	/**
	 * scheel
     * Return the original ID for GEI, EDISCO, MANES
     *
     * @return string Unique identifier.
     */     
    public function getOriginalID()
    {
		
		if (isset($this->fields['id_original_str'])) {
			return $this->fields['id_original_str'];//scheel
		}
        return false;
    }

	/**
	 * scheel
     * Return the catalogue ID like GEI, EDISCO, MANES
	 * It's needed for chosing the right source for item status (see check_item_statuses.js)
     *
     * @return string Unique identifier.
     */
    public function getCatalogueID()
    {
        if (!isset($this->fields['textbook_catalogue_str'])) {
            throw new \Exception('textbook_catalogue ID not set!');
        }
        return $this->fields['textbook_catalogue_str'];
    }
	
	
	/**
	 * scheel
     * Return the PPN, if GEI is selected
	 * It's needed for chosing the right source for item status (see check_item_statuses.js)
     *
     * @return string Unique identifier.
     */
    public function getPPN()
    {
        if (isset($this->fields['textbook_catalogue_str']) && $this->fields['textbook_catalogue_str']=='GEI' && isset($this->fields['id_original_str'])) {
			return $this->fields['id_original_str'];//scheel
        }
        return false;
    }
	
	/**
	 * scheel
     * Return the notes
     *
     * @return list of notes
     */
    public function getNotes()
    {
        if (isset($this->fields['note_str_mv'])) {
           return $this->fields['note_str_mv'];
        }
        return false;
    }
	
	/**
     * scheel
     *
     * @return string
     */
    public function getCatalogue()
    {
        return (isset($this->fields['textbook_catalogue_str'])) ?  $this->fields['textbook_catalogue_str'] : '';
    }
	
	/**
     * scheel
     *
     * @return string
     */
    public function getCatalogueLink()
    {
        return (isset($this->fields['catalogue_link_str'])) ?  $this->fields['catalogue_link_str'] : '';
    }
	
	/**
     * scheel
     *
     * @return string
     */
    public function getOtherTitles()
    {
        return (isset($this->fields['title_alt'])) ?  $this->fields['title_alt'] : array();
    }


}
