<?php

namespace VuFindGEI\RecordDriver;

class SolrDefaultEx extends \VuFind\RecordDriver\SolrDefault


	/**
     * scheel
     *
     * @return string
     */
    public function getCatalogue()
    {
        return (isset($this->fields['textbook_catalogue_str'])) ?  $this->fields['textbook_catalogue_str'] : '';
    }


}

