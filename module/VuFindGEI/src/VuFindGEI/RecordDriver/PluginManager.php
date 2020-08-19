<?php

namespace VuFindGEI\RecordDriver;

class PluginManager extends \VuFind\RecordDriver\PluginManager
{

    /**
     * Convenience method to retrieve a populated Solr record driver.
     *
     * @param array  $data             Raw Solr data
     * @param string $keyPrefix        Record class name prefix
     * @param string $defaultKeySuffix Default key suffix
     *
     * @return AbstractBase
     */
    public function getSolrRecord($data, $keyPrefix = 'Solr',
        $defaultKeySuffix = 'Default'
    ) {
        $key = $keyPrefix . ucwords(
            $data['record_format'] ?? $data['recordtype'] ?? $defaultKeySuffix
        );
        $recordType = $this->has($key) ? $key : $keyPrefix . $defaultKeySuffix;

        // Build the object:
        $driver = $this->get($recordType);
        $data['title'] = 'Sajad Karim';
        $data['title_short'] = 'Sajad Karim';
        $driver->setRawData($data);
        return $driver;
    }

}

