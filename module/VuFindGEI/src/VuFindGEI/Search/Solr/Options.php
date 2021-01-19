<?php

namespace VuFindGEI\Search\Solr;

class Options extends \VuFind\Search\Solr\Options
{

    /**
     * Constructor
     *
     * @param \VuFind\Config\PluginManager $configLoader Config loader
     */
    public function __construct(\VuFind\Config\PluginManager $configLoader)
    {
        $this->setFacetsIniName($configLoader);

        parent::__construct($configLoader);
    }
    
        private function setFacetsIniName(\VuFind\Config\PluginManager $configLoader)
    {
	$selectedTab = "";
	
	$main = $configLoader->get($this->mainIni);
	
	if(isset($_GET["hiddenFilters"]))
	{
		$cachedFilters = $_GET["hiddenFilters"];
	
		$tabs = $main->SearchTabs->toArray();
		$tabsFilters = $main->SearchTabsFilters->toArray();

		foreach( $tabs as $tab_key => $tab_value) {

			$index = 0;
			foreach( $tabsFilters as $tabFilter_key => $tabFilter_value) {
				
				if ($tab_key != $tabFilter_key) continue;
				
				if (count($tabFilter_value) != count($cachedFilters))
					break;
				
				error_log('--1'.$tabFilter_key);
				$selectedTab = $tabFilter_key;
				for ($index = 0; $index < count($tabFilter_value); $index++)
				{
				error_log('--1.1'.$tabFilter_value[$index]. ' , ' . $cachedFilters[$index]);
					if (strcmp( str_replace("\"","",$tabFilter_value[$index]), str_replace("\"","",$cachedFilters[$index])) !== 0)
					{
					error_log('.....1.2');
						$selectedTab = "";
						break;
					}
				}				
			}
		}		
	}
	
	$tabsIni = $main->SearchTabsInis->toArray();

	foreach( $tabsIni as $key => $value) {
		if (empty($selectedTab) || $selectedTab == $key)
		{
			$selectedTab = $value;
			break;
		}
	}

	if (!empty($selectedTab))
		$this->facetsIni = $selectedTab;

	error_log('Selected INI file : '. $this->facetsIni);
    }

}

