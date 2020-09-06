<?php

return array (
  'service_manager' => 
  array (
    'factories' => 
    array (
      'VuFindGEI\\RecordDriver\\PluginManager' => 'VuFindGEI\\ServiceManager\\AbstractPluginManagerFactory',
    ),
    'aliases' => 
    array (
      'VuFind\\RecordDriver\\PluginManager' => 'VuFindGEI\\RecordDriver\\PluginManager',
    ),
  ),
);
