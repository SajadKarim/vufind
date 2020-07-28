<?php

return array (
  'service_manager' => 
  array (
    'factories' => 
    array (
      'GEI\\RecordDriver\\PluginManager' => 'GEI\\ServiceManager\\AbstractPluginManagerFactory',
    ),
    'aliases' => 
    array (
      'VuFind\\RecordDriver\\PluginManager' => 'GEI\\RecordDriver\\PluginManager',
    ),
  ),
);