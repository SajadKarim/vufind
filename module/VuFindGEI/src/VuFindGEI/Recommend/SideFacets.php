<?php

namespace VuFindGEI\Recommend;

class SideFacets extends \VuFind\Recommend\SideFacets
{
    /**
     * Store the configuration of the recommendation module.
     *
     * @param string $settings Settings from searches.ini.
     *
     * @return void
     */
    public function setConfig($settings)
    {
        // Parse the additional settings:
        $settings = explode(':', $settings);
        $mainSection = empty($settings[0]) ? 'Results' : $settings[0];
        $checkboxSection = $settings[1] ?? false;
        $iniName = $settings[2] ?? $this->getFacetsIniName();
	error_log('-----------------------:' . $iniName);

        // Load the desired facet information...
        $config = $this->configLoader->get($iniName);

        // All standard facets to display:
        $this->mainFacets = isset($config->$mainSection) ?
            $config->$mainSection->toArray() : [];

        // Load boolean configurations:
        $this->loadBooleanConfigs($config, array_keys($this->mainFacets));

        // Get a list of fields that should be displayed as ranges rather than
        // standard facet lists.
        if (isset($config->SpecialFacets->dateRange)) {
            $this->dateFacets = $config->SpecialFacets->dateRange->toArray();
        }
        if (isset($config->SpecialFacets->fullDateRange)) {
            $this->fullDateFacets = $config->SpecialFacets->fullDateRange->toArray();
        }
        if (isset($config->SpecialFacets->genericRange)) {
            $this->genericRangeFacets
                = $config->SpecialFacets->genericRange->toArray();
        }
        if (isset($config->SpecialFacets->numericRange)) {
            $this->numericRangeFacets
                = $config->SpecialFacets->numericRange->toArray();
        }

        // Checkbox facets:
        if (substr($checkboxSection, 0, 1) == '~') {
            $checkboxSection = substr($checkboxSection, 1);
            $flipCheckboxes = true;
        }
        $this->checkboxFacets
            = ($checkboxSection && isset($config->$checkboxSection))
            ? $config->$checkboxSection->toArray() : [];
        if (isset($flipCheckboxes) && $flipCheckboxes) {
            $this->checkboxFacets = array_flip($this->checkboxFacets);
        }

        // Show more settings:
        if (isset($config->Results_Settings->showMore)) {
            $this->showMoreSettings
                = $config->Results_Settings->showMore->toArray();
        }
        if (isset($config->Results_Settings->showMoreInLightbox)) {
            $this->showInLightboxSettings
                = $config->Results_Settings->showMoreInLightbox->toArray();
        }

        // Collapsed facets:
        if (isset($config->Results_Settings->collapsedFacets)) {
            $this->collapsedFacets = $config->Results_Settings->collapsedFacets;
        }

        // Hierarchical facets:
        if (isset($config->SpecialFacets->hierarchical)) {
            $this->hierarchicalFacets
                = $config->SpecialFacets->hierarchical->toArray();
        }

        // Hierarchical facet sort options:
        if (isset($config->SpecialFacets->hierarchicalFacetSortOptions)) {
            $this->hierarchicalFacetSortOptions
                = $config->SpecialFacets->hierarchicalFacetSortOptions->toArray();
        }
    }

    private function getFacetsIniName()
    {
	$selectedTab = "";
	
	$main = $this->configLoader->get("config");
	if(isset($_GET['hiddenFilters']))
	{
		$cachedFilters = $_GET['hiddenFilters'];
	
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
		return $selectedTab;
		
	return "facets";
    }

}

