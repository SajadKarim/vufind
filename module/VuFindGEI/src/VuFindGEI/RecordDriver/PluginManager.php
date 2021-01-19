<?php

namespace VuFindGEI\RecordDriver;

class PluginManager extends \VuFind\RecordDriver\PluginManager
{
    protected $aliases = [
        'browzine' => BrowZine::class,
        'eds' => EDS::class,
        'eit' => EIT::class,
        'libguides' => LibGuides::class,
        'missing' => Missing::class,
        'pazpar2' => Pazpar2::class,
        'primo' => Primo::class,
        'search2default' => Search2Default::class,
        'solrarchivesspace' => SolrArchivesSpace::class,
        'solrauth' => SolrAuthMarc::class, // legacy name
        'solrauthdefault' => SolrAuthDefault::class,
        'solrauthmarc' => SolrAuthMarc::class,
        'solrdefault' => \VuFindGEI\RecordDriver\SolrDefaultEx::class,
        'solrmarc' => SolrMarc::class,
        'solrmarcremote' => SolrMarcRemote::class,
        'solroverdrive' => SolrOverdrive::class,
        'solrreserves' => SolrReserves::class,
        'solrweb' => SolrWeb::class,
        'summon' => Summon::class,
        'worldcat' => WorldCat::class,
    ];

    /**
     * Default plugin factories.
     *
     * @var array
     */
    protected $factories = [
        BrowZine::class => InvokableFactory::class,
        EDS::class => NameBasedConfigFactory::class,
        EIT::class => NameBasedConfigFactory::class,
        LibGuides::class => InvokableFactory::class,
        Missing::class => AbstractBaseFactory::class,
        Pazpar2::class => NameBasedConfigFactory::class,
        Primo::class => NameBasedConfigFactory::class,
        Search2Default::class => SolrDefaultFactory::class,
        SolrArchivesSpace::class => SolrDefaultFactory::class,
        SolrAuthDefault::class => SolrDefaultWithoutSearchServiceFactory::class,
        SolrAuthMarc::class => SolrDefaultWithoutSearchServiceFactory::class,
        SolrDefault::class => SolrDefaultFactory::class,
        SolrMarc::class => SolrDefaultFactory::class,
        SolrMarcRemote::class => SolrDefaultFactory::class,
        SolrOverdrive::class => SolrOverdriveFactory::class,
        SolrReserves::class => SolrDefaultWithoutSearchServiceFactory::class,
        SolrWeb::class => SolrWebFactory::class,
        Summon::class => SummonFactory::class,
        WorldCat::class => NameBasedConfigFactory::class,
    ];

}

