<?php

return array (
  'vufind' => 
  array (
    'plugin_managers' => 
    array (
      'recorddriver' => 
      array (
        'factories' => 
        array (
          'VuFindGEI\\RecordDriver\\SolrDefault' => 'VuFindGEI\\RecordDriver\\SolrDefaultFactory',
        ),
        'aliases' => 
        array (
          'VuFind\\RecordDriver\\SolrDefault' => 'VuFindGEI\\RecordDriver\\SolrDefault',
        ),
      ),
    ),
  ),
);
