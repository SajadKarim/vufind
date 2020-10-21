<?php

return array (
  'service_manager' => 
  array (
    'factories' => 
    array (
      'VuFindGEI\\RecordDriver\\PluginManager' => 'VuFindGEI\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFindGEI\\Autocomplete\\Suggester' => 'VuFind\\Autocomplete\\SuggesterFactory',
      'VuFindGEI\\Search\\Solr\\HierarchicalFacetHelper' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFindGEI\\Record\\Loader' => 'VuFindGEI\\Record\\LoaderFactory',
      'VuFindGEI\\Export' => 'VuFindGEI\\ExportFactory',
    ),
    'aliases' => 
    array (
      'VuFind\\RecordDriver\\PluginManager' => 'VuFindGEI\\RecordDriver\\PluginManager',
      'VuFind\\Autocomplete\\Suggester' => 'VuFindGEI\\Autocomplete\\Suggester',
      'VuFind\\Search\\Solr\\HierarchicalFacetHelper' => 'VuFindGEI\\Search\\Solr\\HierarchicalFacetHelper',
      'VuFind\\Record\\Loader' => 'VuFindGEI\\Record\\Loader',
      'VuFind\\Export' => 'VuFindGEI\\Export',
    ),
  ),
  'vufind' => 
  array (
    'plugin_managers' => 
    array (
      'autocomplete' => 
      array (
        'factories' => 
        array (
          'VuFindGEI\\Autocomplete\\Solr' => 'VuFind\\Autocomplete\\SolrFactory',
        ),
        'aliases' => 
        array (
          'VuFind\\Autocomplete\\Solr' => 'VuFindGEI\\Autocomplete\\Solr',
        ),
      ),
      'recorddriver' => 
      array (
        'factories' => 
        array (
          'VuFindGEI\\RecordDriver\\SolrMarc' => 'VuFindGEI\\RecordDriver\\SolrDefaultFactory',
          'VuFindGEI\\RecordDriver\\SolrDefault' => 'VuFindGEI\\RecordDriver\\SolrDefaultFactory',
        ),
        'aliases' => 
        array (
          'VuFind\\RecordDriver\\SolrMarc' => 'VuFindGEI\\RecordDriver\\SolrMarc',
          'VuFind\\RecordDriver\\SolrDefault' => 'VuFindGEI\\RecordDriver\\SolrDefault',
        ),
        'delegators' => 
        array (
          'VuFindGEI\\RecordDriver\\SolrMarc' => 
          array (
            0 => 'VuFind\\RecordDriver\\IlsAwareDelegatorFactory',
          ),
        ),
      ),
      'ils_driver' => 
      array (
        'factories' => 
        array (
          'VuFindGEI\\ILS\\Driver\\DAIA' => 'VuFind\\ILS\\Driver\\DriverWithDateConverterFactory',
        ),
        'aliases' => 
        array (
          'VuFind\\ILS\\Driver\\DAIA' => 'VuFindGEI\\ILS\\Driver\\DAIA',
        ),
      ),
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'VuFindGEI\\Controller\\CartController' => 'VuFindGEI\\Controller\\CartControllerFactory',
    ),
    'aliases' => 
    array (
      'VuFind\\Controller\\CartController' => 'VuFindGEI\\Controller\\CartController',
    ),
  ),
);