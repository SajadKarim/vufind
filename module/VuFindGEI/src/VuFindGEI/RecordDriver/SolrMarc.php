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
    public function getCatalogueEx()
    {
        $data = array(
        	"CatalogueID" => $this->getCatalogueID(),
        	"CatalogueLink" => $this->getCatalogueLink());
        return $data;
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
     *
     * @return string
     */
    public function getOtherTitles()
    {
        return (isset($this->fields['title_alt'])) ?  $this->fields['title_alt'] : array();
    }


    /**
     * Get the text of the part/section portion of the title.
     *
     * @return string
     */
    public function getTitleSection()
    {
        return $this->getFirstFieldValue('245', ['n', 'p']);
    }

    /**
     * Get the first value matching the specified MARC field and subfields.
     * If multiple subfields are specified, they will be concatenated together.
     *
     * @param string $field     The MARC field to read
     * @param array  $subfields The MARC subfield codes to read
     *
     * @return string
     */
    protected function getFirstFieldValue($field, $subfields = null)
    {
        $matches = $this->getFieldArray($field, $subfields);
        return (is_array($matches) && count($matches) > 0) ?
            $matches[0] : null;
    }

    /**
     * Get the first call number associated with the record (empty string if none).
     *
     * @return string
     */
    public function getCallNumber()
    {
    	return "sajad";
        $all = $this->getCallNumbers();
        return isset($all[0]) ? $all[0] : '';
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
     * Get an array of all the languages associated with the record.
     *
     * @return array
     */
    public function getLanguages()
    {
        //return isset($this->fields['language']) ? $this->fields['language'] : [];
		return isset($this->fields['language_code_str_mv']) ? $this->fields['language_code_str_mv'] : [];//scheel
    }



}

