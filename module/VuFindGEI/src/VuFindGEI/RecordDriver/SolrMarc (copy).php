<?php

namespace VuFindGEI\RecordDriver;

class SolrMarc extends \VuFind\RecordDriver\SolrMarc
{
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
     * Get an array of all the languages associated with the record.
     *
     * @return array
     */
    public function getLanguages()
    {
        //return isset($this->fields['language']) ? $this->fields['language'] : [];
		return isset($this->fields['language_code_str_mv']) ? $this->fields['language_code_str_mv'] : [];//scheel
    }

    /**
     * Get an array of publication detail lines combining information from
     * getPublicationDates(), getPublishers() and getPlacesOfPublication().
     *
     * @return array
     */
    public function getPublicationDetails()
    {
        $places = $this->getPlacesOfPublication();
        $names = $this->getPublishers();
        $dates = $this->getHumanReadablePublicationDates();

       // $i = 0;
        $retval = [];
		/*
        while (isset($places[$i]) || isset($names[$i]) || isset($dates[$i])) {
            // Build objects to represent each set of data; these will
            // transform seamlessly into strings in the view layer.
            $retval[] = new Response\PublicationDetails(
                isset($places[$i]) ? $places[$i] : '',
                isset($names[$i]) ? $names[$i] : '',
                isset($dates[$i]) ? $dates[$i] : ''
            );
            $i++;
        }
		*/
		
		//scheel:
		
		foreach ($places as $key => $value) {
			$places[$key] = rtrim($value, ' ,:');
		}
		foreach ($names as $key => $value) {
			$names[$key] = rtrim($value, ' ,:');
		}
		foreach ($dates as $key => $value) {
			$dates[$key] = rtrim($value, ' ,:');
		}
		
		$retval[] = new \VuFind\RecordDriver\Response\PublicationDetails(
                isset($places) ? array_unique($places) : [],
                isset($names) ? array_unique($names) : [],
                isset($dates) ? array_unique($dates) : []
            );
        return $retval;
    }

    /**
     * Get an array of information about record holdings, obtained in real-time
     * from the ILS.
     *
     * @return array
     */
    public function getRealTimeHoldings()
    {
        // scheel: not real time, but fallback from SolrMarc.php
        return isset($this->fields['holdings_str_mv']) ? $this->fields['holdings_str_mv'] : [];
    }

    /**
     * Get the full title of the record.
     *
     * @return string
     */
    public function getTitle()
    {
//        return (isset($this->fields['title'])) ? $this->fields['title'] : '';
        return (isset($this->fields['title_full'])) ? $this->fields['title_full'] : '';//scheel
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
	
}

