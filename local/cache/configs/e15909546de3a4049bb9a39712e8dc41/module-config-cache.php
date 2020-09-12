<?php
return array (
  'service_manager' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Laminas\\Form\\FormAbstractServiceFactory',
    ),
    'aliases' => 
    array (
      'Laminas\\Form\\Annotation\\FormAnnotationBuilder' => 'FormAnnotationBuilder',
      'Laminas\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
      'Laminas\\Form\\FormElementManager' => 'FormElementManager',
      'Zend\\Form\\Annotation\\FormAnnotationBuilder' => 'Laminas\\Form\\Annotation\\FormAnnotationBuilder',
      'Zend\\Form\\Annotation\\AnnotationBuilder' => 'Laminas\\Form\\Annotation\\AnnotationBuilder',
      'Zend\\Form\\FormElementManager' => 'Laminas\\Form\\FormElementManager',
      'HttpRouter' => 'Laminas\\Router\\Http\\TreeRouteStack',
      'router' => 'Laminas\\Router\\RouteStackInterface',
      'Router' => 'Laminas\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
      'Zend\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\TreeRouteStack',
      'Zend\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
      'Zend\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouteStackInterface',
      'Request' => 'VuFind\\Http\\PhpEnvironment\\Request',
      'VuFind\\AccountCapabilities' => 'VuFind\\Config\\AccountCapabilities',
      'VuFind\\AuthManager' => 'VuFind\\Auth\\Manager',
      'VuFind\\AuthPluginManager' => 'VuFind\\Auth\\PluginManager',
      'VuFind\\AutocompletePluginManager' => 'VuFind\\Autocomplete\\PluginManager',
      'VuFind\\CacheManager' => 'VuFind\\Cache\\Manager',
      'VuFind\\ChannelProviderPluginManager' => 'VuFind\\ChannelProvider\\PluginManager',
      'VuFind\\Config' => 'VuFind\\Config\\PluginManager',
      'VuFind\\ContentPluginManager' => 'VuFind\\Content\\PluginManager',
      'VuFind\\ContentAuthorNotesPluginManager' => 'VuFind\\Content\\AuthorNotes\\PluginManager',
      'VuFind\\ContentCoversPluginManager' => 'VuFind\\Content\\Covers\\PluginManager',
      'VuFind\\ContentExcerptsPluginManager' => 'VuFind\\Content\\Excerpts\\PluginManager',
      'VuFind\\ContentReviewsPluginManager' => 'VuFind\\Content\\Reviews\\PluginManager',
      'VuFind\\ContentSummariesPluginManager' => 'VuFind\\Content\\Summaries\\PluginManager',
      'VuFind\\ContentTOCPluginManager' => 'VuFind\\Content\\TOC\\PluginManager',
      'VuFind\\CookieManager' => 'VuFind\\Cookie\\CookieManager',
      'VuFind\\DateConverter' => 'VuFind\\Date\\Converter',
      'VuFind\\DbAdapter' => 'Laminas\\Db\\Adapter\\Adapter',
      'VuFind\\DbAdapterFactory' => 'VuFind\\Db\\AdapterFactory',
      'VuFind\\DbRowPluginManager' => 'VuFind\\Db\\Row\\PluginManager',
      'VuFind\\DbTablePluginManager' => 'VuFind\\Db\\Table\\PluginManager',
      'VuFind\\HierarchicalFacetHelper' => 'VuFind\\Search\\Solr\\HierarchicalFacetHelper',
      'VuFind\\HierarchyDriverPluginManager' => 'VuFind\\Hierarchy\\Driver\\PluginManager',
      'VuFind\\HierarchyTreeDataFormatterPluginManager' => 'VuFind\\Hierarchy\\TreeDataFormatter\\PluginManager',
      'VuFind\\HierarchyTreeDataSourcePluginManager' => 'VuFind\\Hierarchy\\TreeDataSource\\PluginManager',
      'VuFind\\HierarchyTreeRendererPluginManager' => 'VuFind\\Hierarchy\\TreeRenderer\\PluginManager',
      'VuFind\\HMAC' => 'VuFind\\Crypt\\HMAC',
      'VuFind\\Http' => 'VuFindHttp\\HttpService',
      'VuFind\\ILSAuthenticator' => 'VuFind\\Auth\\ILSAuthenticator',
      'VuFind\\ILSConnection' => 'VuFind\\ILS\\Connection',
      'VuFind\\ILSDriverPluginManager' => 'VuFind\\ILS\\Driver\\PluginManager',
      'VuFind\\ILSHoldLogic' => 'VuFind\\ILS\\Logic\\Holds',
      'VuFind\\ILSHoldSettings' => 'VuFind\\ILS\\HoldSettings',
      'VuFind\\ILSTitleHoldLogic' => 'VuFind\\ILS\\Logic\\TitleHolds',
      'VuFind\\IpAddressUtils' => 'VuFind\\Net\\IpAddressUtils',
      'VuFind\\Logger' => 'VuFind\\Log\\Logger',
      'VuFind\\Mailer' => 'VuFind\\Mailer\\Mailer',
      'VuFind\\ProxyConfig' => 'ProxyManager\\Configuration',
      'VuFind\\Recaptcha' => 'VuFind\\Service\\ReCaptcha',
      'VuFind\\RecommendPluginManager' => 'VuFind\\Recommend\\PluginManager',
      'VuFind\\RecordCache' => 'VuFind\\Record\\Cache',
      'VuFind\\RecordDriverPluginManager' => 'VuFind\\RecordDriver\\PluginManager',
      'VuFind\\RecordDriverSolrDefault' => 'VuFind\\RecordDriver\\SolrDefault',
      'VuFind\\RecordLoader' => 'VuFind\\Record\\Loader',
      'VuFind\\RecordRouter' => 'VuFind\\Record\\Router',
      'VuFind\\RecordTabPluginManager' => 'VuFind\\RecordTab\\PluginManager',
      'VuFind\\RelatedPluginManager' => 'VuFind\\Related\\PluginManager',
      'VuFind\\ResolverDriverPluginManager' => 'VuFind\\Resolver\\Driver\\PluginManager',
      'VuFind\\Search' => 'VuFindSearch\\Service',
      'VuFind\\SearchOptionsPluginManager' => 'VuFind\\Search\\Options\\PluginManager',
      'VuFind\\SearchParamsPluginManager' => 'VuFind\\Search\\Params\\PluginManager',
      'VuFind\\SearchResultsPluginManager' => 'VuFind\\Search\\Results\\PluginManager',
      'VuFind\\SearchRunner' => 'VuFind\\Search\\SearchRunner',
      'VuFind\\SearchSpecsReader' => 'VuFind\\Config\\SearchSpecsReader',
      'VuFind\\SearchTabsHelper' => 'VuFind\\Search\\SearchTabsHelper',
      'VuFind\\SessionManager' => 'Laminas\\Session\\SessionManager',
      'VuFind\\SessionPluginManager' => 'VuFind\\Session\\PluginManager',
      'VuFind\\SMS' => 'VuFind\\SMS\\SMSInterface',
      'VuFind\\Translator' => 'Laminas\\Mvc\\I18n\\Translator',
      'VuFind\\WorldCatUtils' => 'VuFind\\Connection\\WorldCatUtils',
      'VuFind\\YamlReader' => 'VuFind\\Config\\YamlReader',
      'Laminas\\Validator\\Csrf' => 'VuFind\\Validator\\Csrf',
      'VuFind\\RecordDriver\\PluginManager' => 'VuFindGEI\\RecordDriver\\PluginManager',
      'VuFind\\Autocomplete\\Suggester' => 'VuFindGEI\\Autocomplete\\Suggester',
      'VuFind\\Search\\Solr\\HierarchicalFacetHelper' => 'VuFindGEI\\Search\\Solr\\HierarchicalFacetHelper',
    ),
    'factories' => 
    array (
      'FormAnnotationBuilder' => 'Laminas\\Form\\Annotation\\AnnotationBuilderFactory',
      'FormElementManager' => 'Laminas\\Form\\FormElementManagerFactory',
      'Laminas\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\HttpRouterFactory',
      'Laminas\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManagerFactory',
      'Laminas\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouterFactory',
      'LmcRbacMvc\\Guards' => 'LmcRbacMvc\\Factory\\GuardsFactory',
      'Rbac\\Rbac' => 'LmcRbacMvc\\Factory\\RbacFactory',
      'LmcRbacMvc\\Assertion\\AssertionPluginManager' => 'LmcRbacMvc\\Factory\\AssertionPluginManagerFactory',
      'LmcRbacMvc\\Collector\\RbacCollector' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'LmcRbacMvc\\Guard\\GuardPluginManager' => 'LmcRbacMvc\\Factory\\GuardPluginManagerFactory',
      'LmcRbacMvc\\Identity\\AuthenticationIdentityProvider' => 'LmcRbacMvc\\Factory\\AuthenticationIdentityProviderFactory',
      'LmcRbacMvc\\Options\\ModuleOptions' => 'LmcRbacMvc\\Factory\\ModuleOptionsFactory',
      'LmcRbacMvc\\Role\\RoleProviderPluginManager' => 'LmcRbacMvc\\Factory\\RoleProviderPluginManagerFactory',
      'LmcRbacMvc\\Service\\AuthorizationService' => 'LmcRbacMvc\\Factory\\AuthorizationServiceFactory',
      'LmcRbacMvc\\Service\\RoleService' => 'LmcRbacMvc\\Factory\\RoleServiceFactory',
      'LmcRbacMvc\\View\\Strategy\\RedirectStrategy' => 'LmcRbacMvc\\Factory\\RedirectStrategyFactory',
      'LmcRbacMvc\\View\\Strategy\\UnauthorizedStrategy' => 'LmcRbacMvc\\Factory\\UnauthorizedStrategyFactory',
      'League\\CommonMark\\MarkdownConverterInterface' => 'VuFind\\Service\\MarkdownFactory',
      'ProxyManager\\Configuration' => 'VuFind\\Service\\ProxyConfigFactory',
      'VuFind\\AjaxHandler\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Auth\\EmailAuthenticator' => 'VuFind\\Auth\\EmailAuthenticatorFactory',
      'VuFind\\Auth\\ILSAuthenticator' => 'VuFind\\Auth\\ILSAuthenticatorFactory',
      'VuFind\\Auth\\Manager' => 'VuFind\\Auth\\ManagerFactory',
      'VuFind\\Auth\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Autocomplete\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Autocomplete\\Suggester' => 'VuFind\\Autocomplete\\SuggesterFactory',
      'VuFind\\Cache\\Manager' => 'VuFind\\Cache\\ManagerFactory',
      'VuFind\\Captcha\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Cart' => 'VuFind\\CartFactory',
      'VuFind\\ChannelProvider\\ChannelLoader' => 'VuFind\\ChannelProvider\\ChannelLoaderFactory',
      'VuFind\\ChannelProvider\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Config\\AccountCapabilities' => 'VuFind\\Config\\AccountCapabilitiesFactory',
      'VuFind\\Config\\PluginManager' => 'VuFind\\Config\\PluginManagerFactory',
      'VuFind\\Config\\SearchSpecsReader' => 'VuFind\\Config\\YamlReaderFactory',
      'VuFind\\Config\\YamlReader' => 'VuFind\\Config\\YamlReaderFactory',
      'VuFind\\Connection\\Relais' => 'VuFind\\Connection\\RelaisFactory',
      'VuFind\\Connection\\WorldCatUtils' => 'VuFind\\Connection\\WorldCatUtilsFactory',
      'VuFind\\Content\\PageLocator' => 'VuFind\\Content\\PageLocatorFactory',
      'VuFind\\Content\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\AuthorNotes\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\Covers\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\Excerpts\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\ObalkyKnihService' => 'VuFind\\Content\\ObalkyKnihServiceFactory',
      'VuFind\\Content\\Reviews\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\Summaries\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\TOC\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\ContentBlock\\BlockLoader' => 'VuFind\\ContentBlock\\BlockLoaderFactory',
      'VuFind\\ContentBlock\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Cookie\\CookieManager' => 'VuFind\\Cookie\\CookieManagerFactory',
      'VuFind\\Cover\\CachingProxy' => 'VuFind\\Cover\\CachingProxyFactory',
      'VuFind\\Cover\\Generator' => 'VuFind\\Cover\\GeneratorFactory',
      'VuFind\\Cover\\Layer\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Cover\\Loader' => 'VuFind\\Cover\\LoaderFactory',
      'VuFind\\Cover\\Router' => 'VuFind\\Cover\\RouterFactory',
      'VuFind\\Crypt\\HMAC' => 'VuFind\\Crypt\\HMACFactory',
      'VuFind\\Date\\Converter' => 'VuFind\\Service\\DateConverterFactory',
      'VuFind\\Db\\AdapterFactory' => 'VuFind\\Service\\ServiceWithConfigIniFactory',
      'VuFind\\Db\\Row\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Db\\Table\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\DigitalContent\\OverdriveConnector' => 'VuFind\\DigitalContent\\OverdriveConnectorFactory',
      'VuFind\\DoiLinker\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Export' => 'VuFind\\ExportFactory',
      'VuFind\\Favorites\\FavoritesService' => 'VuFind\\Favorites\\FavoritesServiceFactory',
      'VuFind\\Form\\Form' => 'VuFind\\Form\\FormFactory',
      'VuFind\\GeoFeatures\\BasemapConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
      'VuFind\\GeoFeatures\\MapTabConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
      'VuFind\\GeoFeatures\\MapSelectionConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
      'VuFind\\Hierarchy\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Hierarchy\\TreeDataFormatter\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Hierarchy\\TreeDataSource\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Hierarchy\\TreeRenderer\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Http\\PhpEnvironment\\Request' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\ILS\\Connection' => 'VuFind\\ILS\\ConnectionFactory',
      'VuFind\\ILS\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\ILS\\Logic\\Holds' => 'VuFind\\ILS\\Logic\\LogicFactory',
      'VuFind\\ILS\\Logic\\TitleHolds' => 'VuFind\\ILS\\Logic\\LogicFactory',
      'VuFind\\ILS\\HoldSettings' => 'VuFind\\ILS\\HoldSettingsFactory',
      'VuFind\\Log\\Logger' => 'VuFind\\Log\\LoggerFactory',
      'VuFind\\Mailer\\Mailer' => 'VuFind\\Mailer\\Factory',
      'VuFind\\MetadataVocabulary\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Net\\IpAddressUtils' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Net\\UserIpReader' => 'VuFind\\Net\\UserIpReaderFactory',
      'VuFind\\OAI\\Server' => 'VuFind\\OAI\\ServerFactory',
      'VuFind\\OAI\\Server\\Auth' => 'VuFind\\OAI\\ServerFactory',
      'VuFind\\QRCode\\Loader' => 'VuFind\\QRCode\\LoaderFactory',
      'VuFind\\Recommend\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Record\\Cache' => 'VuFind\\Record\\CacheFactory',
      'VuFind\\Record\\FallbackLoader\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Record\\Loader' => 'VuFind\\Record\\LoaderFactory',
      'VuFind\\Record\\Router' => 'VuFind\\Service\\ServiceWithConfigIniFactory',
      'VuFind\\RecordDriver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\RecordTab\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\RecordTab\\TabManager' => 'VuFind\\RecordTab\\TabManagerFactory',
      'VuFind\\Related\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Resolver\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Role\\PermissionManager' => 'VuFind\\Role\\PermissionManagerFactory',
      'VuFind\\Role\\PermissionDeniedManager' => 'VuFind\\Role\\PermissionDeniedManagerFactory',
      'VuFind\\Search\\BackendManager' => 'VuFind\\Search\\BackendManagerFactory',
      'VuFind\\Search\\History' => 'VuFind\\Search\\HistoryFactory',
      'VuFind\\Search\\Memory' => 'VuFind\\Search\\MemoryFactory',
      'VuFind\\Search\\FacetCache\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Factory\\UrlQueryHelperFactory' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Search\\Options\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Params\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Results\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Solr\\HierarchicalFacetHelper' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Search\\SearchRunner' => 'VuFind\\Search\\SearchRunnerFactory',
      'VuFind\\Search\\SearchTabsHelper' => 'VuFind\\Search\\SearchTabsHelperFactory',
      'VuFind\\Security\\CspHeaderGenerator' => 'VuFind\\Security\\CspHeaderGeneratorFactory',
      'VuFind\\Security\\NonceGenerator' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Service\\ReCaptcha' => 'VuFind\\Service\\ReCaptchaFactory',
      'VuFind\\Session\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Session\\Settings' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\SMS\\SMSInterface' => 'VuFind\\SMS\\Factory',
      'VuFind\\Solr\\Writer' => 'VuFind\\Solr\\WriterFactory',
      'VuFind\\Tags' => 'VuFind\\TagsFactory',
      'VuFind\\UrlShortener\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\UrlShortener\\UrlShortenerInterface' => 'VuFind\\UrlShortener\\ServiceFactory',
      'VuFind\\Validator\\Csrf' => 'VuFind\\Validator\\CsrfFactory',
      'VuFindHttp\\HttpService' => 'VuFind\\Service\\HttpServiceFactory',
      'VuFindSearch\\Service' => 'VuFind\\Service\\SearchServiceFactory',
      'Laminas\\Db\\Adapter\\Adapter' => 'VuFind\\Db\\AdapterFactory',
      'Laminas\\Http\\PhpEnvironment\\RemoteAddress' => 'VuFind\\Http\\PhpEnvironment\\RemoteAddressFactory',
      'Laminas\\Mvc\\I18n\\Translator' => 'VuFind\\I18n\\Translator\\TranslatorFactory',
      'Laminas\\Session\\SessionManager' => 'VuFind\\Session\\ManagerFactory',
      'VuFindApi\\Formatter\\FacetFormatter' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFindApi\\Formatter\\RecordFormatter' => 'VuFindApi\\Formatter\\RecordFormatterFactory',
      'VuFindApi\\Formatter\\Search2RecordFormatter' => 'VuFindApi\\Formatter\\Search2RecordFormatterFactory',
      'VuFindApi\\Formatter\\WebRecordFormatter' => 'VuFindApi\\Formatter\\WebRecordFormatterFactory',
      'VuFindGEI\\RecordDriver\\PluginManager' => 'VuFindGEI\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFindGEI\\Autocomplete\\Suggester' => 'VuFind\\Autocomplete\\SuggesterFactory',
      'VuFindGEI\\Search\\Solr\\HierarchicalFacetHelper' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
    ),
    'allow_override' => true,
    'initializers' => 
    array (
      0 => 'VuFind\\ServiceManager\\ServiceInitializer',
    ),
  ),
  'view_helpers' => 
  array (
    'aliases' => 
    array (
      'form' => 'Laminas\\Form\\View\\Helper\\Form',
      'Form' => 'Laminas\\Form\\View\\Helper\\Form',
      'formbutton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'form_button' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'formButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'FormButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'formcaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'form_captcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'formCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'FormCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'captchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha/dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'CaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'formcaptchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'form_captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'formCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'FormCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha/figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'CaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'formcaptchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'form_captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'formCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'FormCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captcha/image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'CaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'formcaptchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'form_captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'formCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'FormCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha/recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'CaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcaptcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'form_captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'FormCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'form_checkbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'formCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'FormCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'formcollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'form_collection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'formCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'FormCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'formcolor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'form_color' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'formColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'FormColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'formdate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'form_date' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'formDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'FormDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'formdatetime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'form_date_time' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'formDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'FormDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'formdatetimelocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'form_date_time_local' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'formDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'FormDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'formdatetimeselect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'form_date_time_select' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'formDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'FormDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'formdateselect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'form_date_select' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'formDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'FormDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'form_element' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'formelement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'formElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'FormElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'form_element_errors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'formelementerrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'formElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'FormElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'form_email' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'formemail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'formEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'FormEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'form_file' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'formfile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'formFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'FormFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'formfileapcprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'form_file_apc_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'FormFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formfilesessionprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'form_file_session_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'FormFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formfileuploadprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'form_file_upload_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'FormFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formhidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'form_hidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'formHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'FormHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'formimage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'form_image' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'formImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'FormImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'forminput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'form_input' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'formInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'FormInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'formlabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'form_label' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'formLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'FormLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'formmonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'form_month' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'formMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'FormMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'formmonthselect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'form_month_select' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'formMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'FormMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'formmulticheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'form_multi_checkbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'formMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'FormMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'formnumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'form_number' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'formNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'FormNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'formpassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'form_password' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'formPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'FormPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'formradio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'form_radio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'formRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'FormRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'formrange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'form_range' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'formRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'FormRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'formreset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'form_reset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'formReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'FormReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'formrow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'form_row' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'formRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'FormRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'formsearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'form_search' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'formSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'FormSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'formselect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'form_select' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'formSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'FormSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'formsubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'form_submit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'formSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'FormSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'formtel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'form_tel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'formTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'FormTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'formtext' => 'Laminas\\Form\\View\\Helper\\FormText',
      'form_text' => 'Laminas\\Form\\View\\Helper\\FormText',
      'formText' => 'Laminas\\Form\\View\\Helper\\FormText',
      'FormText' => 'Laminas\\Form\\View\\Helper\\FormText',
      'formtextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'form_text_area' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'formTextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'formTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'FormTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'formtime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'form_time' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'formTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'FormTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'formurl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'form_url' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'formUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'FormUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'formweek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'form_week' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'formWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'FormWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'Zend\\Form\\View\\Helper\\Form' => 'Laminas\\Form\\View\\Helper\\Form',
      'Zend\\Form\\View\\Helper\\FormButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'Zend\\Form\\View\\Helper\\FormCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'Zend\\Form\\View\\Helper\\Captcha\\Dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'Zend\\Form\\View\\Helper\\Captcha\\Figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'Zend\\Form\\View\\Helper\\Captcha\\Image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'Zend\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'Zend\\Form\\View\\Helper\\FormCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'Zend\\Form\\View\\Helper\\FormColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'Zend\\Form\\View\\Helper\\FormDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'Zend\\Form\\View\\Helper\\FormDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'Zend\\Form\\View\\Helper\\FormDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'Zend\\Form\\View\\Helper\\FormDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'Zend\\Form\\View\\Helper\\FormDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'Zend\\Form\\View\\Helper\\FormElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'Zend\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'Zend\\Form\\View\\Helper\\FormEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'Zend\\Form\\View\\Helper\\FormFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'Zend\\Form\\View\\Helper\\FormHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'Zend\\Form\\View\\Helper\\FormImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'Zend\\Form\\View\\Helper\\FormInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'Zend\\Form\\View\\Helper\\FormLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'Zend\\Form\\View\\Helper\\FormMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'Zend\\Form\\View\\Helper\\FormMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'Zend\\Form\\View\\Helper\\FormMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'Zend\\Form\\View\\Helper\\FormNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'Zend\\Form\\View\\Helper\\FormPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'Zend\\Form\\View\\Helper\\FormRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'Zend\\Form\\View\\Helper\\FormRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'Zend\\Form\\View\\Helper\\FormReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'Zend\\Form\\View\\Helper\\FormRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'Zend\\Form\\View\\Helper\\FormSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'Zend\\Form\\View\\Helper\\FormSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'Zend\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'Zend\\Form\\View\\Helper\\FormTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'Zend\\Form\\View\\Helper\\FormText' => 'Laminas\\Form\\View\\Helper\\FormText',
      'Zend\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'Zend\\Form\\View\\Helper\\FormTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'Zend\\Form\\View\\Helper\\FormUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'Zend\\Form\\View\\Helper\\FormWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'isGranted' => 'LmcRbacMvc\\View\\Helper\\IsGranted',
      'hasRole' => 'LmcRbacMvc\\View\\Helper\\HasRole',
    ),
    'factories' => 
    array (
      'Laminas\\Form\\View\\Helper\\Form' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormButton' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\Dumb' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\Figlet' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\Image' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormCollection' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormColor' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDate' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateTimeLocal' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateTimeSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormElement' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormEmail' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormFile' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormHidden' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormImage' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormInput' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormLabel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormMonth' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormMonthSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormMultiCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormPassword' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormRadio' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormRange' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormReset' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormRow' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormSearch' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormTel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormText' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormUrl' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormWeek' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'LmcRbacMvc\\View\\Helper\\IsGranted' => 'LmcRbacMvc\\Factory\\IsGrantedViewHelperFactory',
      'LmcRbacMvc\\View\\Helper\\HasRole' => 'LmcRbacMvc\\Factory\\HasRoleViewHelperFactory',
    ),
    'initializers' => 
    array (
      0 => 'VuFind\\ServiceManager\\ServiceInitializer',
    ),
  ),
  'route_manager' => 
  array (
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'default' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/[:controller[/[:action]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'index',
            'action' => 'Home',
          ),
        ),
      ),
      'alma-webhook' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Alma/Webhook/[:almaWebhookAction]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Alma',
            'action' => 'Webhook',
          ),
        ),
      ),
      'content-page' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Content/[:page]',
          'constraints' => 
          array (
            'page' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Content',
            'action' => 'Content',
          ),
        ),
      ),
      'shortlink' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/short/[:id]',
          'constraints' => 
          array (
            'id' => '[a-zA-Z0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Shortlink',
            'action' => 'redirect',
          ),
        ),
      ),
      'legacy-alphabrowse-results' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/AlphaBrowse/Results',
          'defaults' => 
          array (
            'controller' => 'Alphabrowse',
            'action' => 'Home',
          ),
        ),
      ),
      'legacy-bookcover' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/bookcover.php',
          'defaults' => 
          array (
            'controller' => 'Cover',
            'action' => 'Show',
          ),
        ),
      ),
      'legacy-summonrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Record',
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'legacy-worldcatrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/WorldCat/Record',
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'soap-shibboleth-logout-notification-handler' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/soap/shiblogout',
          'defaults' => 
          array (
            'controller' => 'ShibbolethLogoutNotification',
            'action' => 'index',
          ),
        ),
        'child_routes' => 
        array (
          'get' => 
          array (
            'type' => 'method',
            'options' => 
            array (
              'verb' => 'get',
              'defaults' => 
              array (
                'action' => 'get',
              ),
            ),
          ),
          'post' => 
          array (
            'type' => 'method',
            'options' => 
            array (
              'verb' => 'post',
              'defaults' => 
              array (
                'action' => 'post',
              ),
            ),
          ),
        ),
      ),
      'record' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Home',
          ),
        ),
      ),
      'record-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AddComment',
          ),
        ),
      ),
      'record-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'record-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AddTag',
          ),
        ),
      ),
      'record-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'record-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Save',
          ),
        ),
      ),
      'record-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Email',
          ),
        ),
      ),
      'record-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'SMS',
          ),
        ),
      ),
      'record-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Cite',
          ),
        ),
      ),
      'record-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Export',
          ),
        ),
      ),
      'record-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'RDF',
          ),
        ),
      ),
      'record-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Hold',
          ),
        ),
      ),
      'record-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Home',
          ),
        ),
      ),
      'record-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'record-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'record-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'record-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'PDF',
          ),
        ),
      ),
      'record-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Epub',
          ),
        ),
      ),
      'record-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'collection' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Home',
          ),
        ),
      ),
      'collection-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'AddComment',
          ),
        ),
      ),
      'collection-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'collection-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'AddTag',
          ),
        ),
      ),
      'collection-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'collection-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Save',
          ),
        ),
      ),
      'collection-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Email',
          ),
        ),
      ),
      'collection-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'SMS',
          ),
        ),
      ),
      'collection-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Cite',
          ),
        ),
      ),
      'collection-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Export',
          ),
        ),
      ),
      'collection-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'RDF',
          ),
        ),
      ),
      'collection-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Hold',
          ),
        ),
      ),
      'collection-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Home',
          ),
        ),
      ),
      'collection-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'collection-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'collection-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'collection-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'PDF',
          ),
        ),
      ),
      'collection-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Epub',
          ),
        ),
      ),
      'collection-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'edsrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'edsrecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'edsrecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'edsrecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'edsrecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'edsrecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'edsrecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'edsrecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'edsrecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'edsrecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'edsrecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'edsrecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'edsrecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'edsrecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'edsrecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'edsrecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'edsrecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'edsrecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Epub',
          ),
        ),
      ),
      'edsrecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'eitrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'eitrecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'eitrecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'eitrecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'eitrecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'eitrecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'eitrecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'eitrecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'eitrecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'eitrecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'eitrecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'eitrecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'eitrecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'eitrecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'eitrecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'eitrecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'eitrecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'eitrecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Epub',
          ),
        ),
      ),
      'eitrecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'missingrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'missingrecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'missingrecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'missingrecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'missingrecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'missingrecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'missingrecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'missingrecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'missingrecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'missingrecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'missingrecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'missingrecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'missingrecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'missingrecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'missingrecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'missingrecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'missingrecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'missingrecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Epub',
          ),
        ),
      ),
      'missingrecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'primorecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'primorecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'primorecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'primorecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'primorecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'primorecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'primorecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'primorecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'primorecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'primorecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'primorecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'primorecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'primorecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'primorecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'primorecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'primorecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'primorecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'primorecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Epub',
          ),
        ),
      ),
      'primorecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'solrauthrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Home',
          ),
        ),
      ),
      'solrauthrecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'AddComment',
          ),
        ),
      ),
      'solrauthrecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'solrauthrecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'AddTag',
          ),
        ),
      ),
      'solrauthrecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'solrauthrecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Save',
          ),
        ),
      ),
      'solrauthrecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Email',
          ),
        ),
      ),
      'solrauthrecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'SMS',
          ),
        ),
      ),
      'solrauthrecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Cite',
          ),
        ),
      ),
      'solrauthrecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Export',
          ),
        ),
      ),
      'solrauthrecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'RDF',
          ),
        ),
      ),
      'solrauthrecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Hold',
          ),
        ),
      ),
      'solrauthrecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Home',
          ),
        ),
      ),
      'solrauthrecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'solrauthrecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'solrauthrecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'solrauthrecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'PDF',
          ),
        ),
      ),
      'solrauthrecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Epub',
          ),
        ),
      ),
      'solrauthrecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'summonrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'summonrecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'summonrecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'summonrecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'summonrecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'summonrecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'summonrecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'summonrecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'summonrecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'summonrecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'summonrecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'summonrecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'summonrecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'summonrecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'summonrecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'summonrecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'summonrecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'summonrecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Epub',
          ),
        ),
      ),
      'summonrecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'worldcatrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'worldcatrecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'worldcatrecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'worldcatrecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'worldcatrecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'worldcatrecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'worldcatrecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'worldcatrecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'worldcatrecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'worldcatrecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'worldcatrecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'worldcatrecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'worldcatrecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'worldcatrecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'worldcatrecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'worldcatrecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'worldcatrecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'worldcatrecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Epub',
          ),
        ),
      ),
      'worldcatrecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'search2record' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Home',
          ),
        ),
      ),
      'search2record-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AddComment',
          ),
        ),
      ),
      'search2record-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'search2record-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AddTag',
          ),
        ),
      ),
      'search2record-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'search2record-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Save',
          ),
        ),
      ),
      'search2record-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Email',
          ),
        ),
      ),
      'search2record-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'SMS',
          ),
        ),
      ),
      'search2record-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Cite',
          ),
        ),
      ),
      'search2record-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Export',
          ),
        ),
      ),
      'search2record-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'RDF',
          ),
        ),
      ),
      'search2record-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Hold',
          ),
        ),
      ),
      'search2record-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Home',
          ),
        ),
      ),
      'search2record-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'search2record-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'search2record-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'search2record-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'PDF',
          ),
        ),
      ),
      'search2record-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Epub',
          ),
        ),
      ),
      'search2record-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'search2collection' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Home',
          ),
        ),
      ),
      'search2collection-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'AddComment',
          ),
        ),
      ),
      'search2collection-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'search2collection-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'AddTag',
          ),
        ),
      ),
      'search2collection-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'search2collection-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Save',
          ),
        ),
      ),
      'search2collection-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Email',
          ),
        ),
      ),
      'search2collection-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'SMS',
          ),
        ),
      ),
      'search2collection-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Cite',
          ),
        ),
      ),
      'search2collection-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Export',
          ),
        ),
      ),
      'search2collection-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'RDF',
          ),
        ),
      ),
      'search2collection-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Hold',
          ),
        ),
      ),
      'search2collection-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Home',
          ),
        ),
      ),
      'search2collection-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'search2collection-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'search2collection-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'search2collection-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'PDF',
          ),
        ),
      ),
      'search2collection-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'Epub',
          ),
        ),
      ),
      'search2collection-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Collection/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Collection',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'search2collectionrecord' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Home',
          ),
        ),
      ),
      'search2collectionrecord-addcomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AddComment',
          ),
        ),
      ),
      'search2collectionrecord-deletecomment' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'search2collectionrecord-addtag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AddTag',
          ),
        ),
      ),
      'search2collectionrecord-deletetag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'search2collectionrecord-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Save',
          ),
        ),
      ),
      'search2collectionrecord-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Email',
          ),
        ),
      ),
      'search2collectionrecord-sms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'SMS',
          ),
        ),
      ),
      'search2collectionrecord-cite' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Cite',
          ),
        ),
      ),
      'search2collectionrecord-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Export',
          ),
        ),
      ),
      'search2collectionrecord-rdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'RDF',
          ),
        ),
      ),
      'search2collectionrecord-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Hold',
          ),
        ),
      ),
      'search2collectionrecord-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Home',
          ),
        ),
      ),
      'search2collectionrecord-storageretrievalrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'search2collectionrecord-ajaxtab' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'search2collectionrecord-illrequest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'search2collectionrecord-pdf' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'PDF',
          ),
        ),
      ),
      'search2collectionrecord-epub' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Epub',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Epub',
          ),
        ),
      ),
      'search2collectionrecord-linkedtext' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/LinkedText',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'LinkedText',
          ),
        ),
      ),
      'feedback-form' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Feedback/Form/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Feedback',
            'action' => 'Form',
          ),
        ),
      ),
      'userList' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MyResearch/MyList/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'MyList',
          ),
        ),
      ),
      'editList' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MyResearch/EditList/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'EditList',
          ),
        ),
      ),
      'editLibraryCard' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/LibraryCards/editCard/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'editCard',
          ),
        ),
      ),
      'alphabrowse-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Alphabrowse/Home',
          'defaults' => 
          array (
            'controller' => 'Alphabrowse',
            'action' => 'Home',
          ),
        ),
      ),
      'author-facetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Author/FacetList',
          'defaults' => 
          array (
            'controller' => 'Author',
            'action' => 'FacetList',
          ),
        ),
      ),
      'author-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Author/Home',
          'defaults' => 
          array (
            'controller' => 'Author',
            'action' => 'Home',
          ),
        ),
      ),
      'author-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Author/Search',
          'defaults' => 
          array (
            'controller' => 'Author',
            'action' => 'Search',
          ),
        ),
      ),
      'authority-facetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/FacetList',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'FacetList',
          ),
        ),
      ),
      'authority-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/Home',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Home',
          ),
        ),
      ),
      'authority-record' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/Record',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Record',
          ),
        ),
      ),
      'authority-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/Search',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Search',
          ),
        ),
      ),
      'browse-author' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Author',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Author',
          ),
        ),
      ),
      'browse-dewey' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Dewey',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Dewey',
          ),
        ),
      ),
      'browse-era' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Era',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Era',
          ),
        ),
      ),
      'browse-genre' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Genre',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Genre',
          ),
        ),
      ),
      'browse-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Home',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Home',
          ),
        ),
      ),
      'browse-lcc' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/LCC',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'LCC',
          ),
        ),
      ),
      'browse-region' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Region',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Region',
          ),
        ),
      ),
      'browse-tag' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Tag',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Tag',
          ),
        ),
      ),
      'browse-topic' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Topic',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Topic',
          ),
        ),
      ),
      'cart-doexport' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/doExport',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'doExport',
          ),
        ),
      ),
      'browzine-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/BrowZine/Home',
          'defaults' => 
          array (
            'controller' => 'BrowZine',
            'action' => 'Home',
          ),
        ),
      ),
      'browzine-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/BrowZine/Search',
          'defaults' => 
          array (
            'controller' => 'BrowZine',
            'action' => 'Search',
          ),
        ),
      ),
      'cart-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Email',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Email',
          ),
        ),
      ),
      'cart-export' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Export',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Export',
          ),
        ),
      ),
      'cart-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Home',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Home',
          ),
        ),
      ),
      'cart-myresearchbulk' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/MyResearchBulk',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'MyResearchBulk',
          ),
        ),
      ),
      'cart-processor' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Processor',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Processor',
          ),
        ),
      ),
      'cart-save' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Save',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Save',
          ),
        ),
      ),
      'cart-searchresultsbulk' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/SearchResultsBulk',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'SearchResultsBulk',
          ),
        ),
      ),
      'channels-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Channels/Home',
          'defaults' => 
          array (
            'controller' => 'Channels',
            'action' => 'Home',
          ),
        ),
      ),
      'channels-record' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Channels/Record',
          'defaults' => 
          array (
            'controller' => 'Channels',
            'action' => 'Record',
          ),
        ),
      ),
      'channels-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Channels/Search',
          'defaults' => 
          array (
            'controller' => 'Channels',
            'action' => 'Search',
          ),
        ),
      ),
      'collections-bytitle' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Collections/ByTitle',
          'defaults' => 
          array (
            'controller' => 'Collections',
            'action' => 'ByTitle',
          ),
        ),
      ),
      'collections-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Collections/Home',
          'defaults' => 
          array (
            'controller' => 'Collections',
            'action' => 'Home',
          ),
        ),
      ),
      'combined-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Combined/Home',
          'defaults' => 
          array (
            'controller' => 'Combined',
            'action' => 'Home',
          ),
        ),
      ),
      'combined-results' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Combined/Results',
          'defaults' => 
          array (
            'controller' => 'Combined',
            'action' => 'Results',
          ),
        ),
      ),
      'combined-searchbox' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Combined/SearchBox',
          'defaults' => 
          array (
            'controller' => 'Combined',
            'action' => 'SearchBox',
          ),
        ),
      ),
      'confirm-confirm' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Confirm/Confirm',
          'defaults' => 
          array (
            'controller' => 'Confirm',
            'action' => 'Confirm',
          ),
        ),
      ),
      'cover-show' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cover/Show',
          'defaults' => 
          array (
            'controller' => 'Cover',
            'action' => 'Show',
          ),
        ),
      ),
      'cover-unavailable' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cover/Unavailable',
          'defaults' => 
          array (
            'controller' => 'Cover',
            'action' => 'Unavailable',
          ),
        ),
      ),
      'eds-advanced' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EDS/Advanced',
          'defaults' => 
          array (
            'controller' => 'EDS',
            'action' => 'Advanced',
          ),
        ),
      ),
      'eds-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EDS/Home',
          'defaults' => 
          array (
            'controller' => 'EDS',
            'action' => 'Home',
          ),
        ),
      ),
      'eds-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EDS/Search',
          'defaults' => 
          array (
            'controller' => 'EDS',
            'action' => 'Search',
          ),
        ),
      ),
      'eit-advanced' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EIT/Advanced',
          'defaults' => 
          array (
            'controller' => 'EIT',
            'action' => 'Advanced',
          ),
        ),
      ),
      'eit-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EIT/Home',
          'defaults' => 
          array (
            'controller' => 'EIT',
            'action' => 'Home',
          ),
        ),
      ),
      'eit-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EIT/Search',
          'defaults' => 
          array (
            'controller' => 'EIT',
            'action' => 'Search',
          ),
        ),
      ),
      'error-permissiondenied' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Error/PermissionDenied',
          'defaults' => 
          array (
            'controller' => 'Error',
            'action' => 'PermissionDenied',
          ),
        ),
      ),
      'error-unavailable' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Error/Unavailable',
          'defaults' => 
          array (
            'controller' => 'Error',
            'action' => 'Unavailable',
          ),
        ),
      ),
      'feedback-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Feedback/Email',
          'defaults' => 
          array (
            'controller' => 'Feedback',
            'action' => 'Email',
          ),
        ),
      ),
      'feedback-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Feedback/Home',
          'defaults' => 
          array (
            'controller' => 'Feedback',
            'action' => 'Home',
          ),
        ),
      ),
      'help-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Help/Home',
          'defaults' => 
          array (
            'controller' => 'Help',
            'action' => 'Home',
          ),
        ),
      ),
      'install-done' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/Done',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'Done',
          ),
        ),
      ),
      'install-fixbasicconfig' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixBasicConfig',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixBasicConfig',
          ),
        ),
      ),
      'install-fixcache' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixCache',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixCache',
          ),
        ),
      ),
      'install-fixdatabase' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixDatabase',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixDatabase',
          ),
        ),
      ),
      'install-fixdependencies' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixDependencies',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixDependencies',
          ),
        ),
      ),
      'install-fixils' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixILS',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixILS',
          ),
        ),
      ),
      'install-fixsecurity' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixSecurity',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixSecurity',
          ),
        ),
      ),
      'install-fixsolr' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixSolr',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixSolr',
          ),
        ),
      ),
      'install-fixsslcerts' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixSSLCerts',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixSSLCerts',
          ),
        ),
      ),
      'install-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/Home',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'Home',
          ),
        ),
      ),
      'install-performsecurityfix' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/PerformSecurityFix',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'PerformSecurityFix',
          ),
        ),
      ),
      'install-showsql' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/ShowSQL',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'ShowSQL',
          ),
        ),
      ),
      'libguides-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibGuides/Home',
          'defaults' => 
          array (
            'controller' => 'LibGuides',
            'action' => 'Home',
          ),
        ),
      ),
      'libguides-results' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibGuides/Results',
          'defaults' => 
          array (
            'controller' => 'LibGuides',
            'action' => 'Results',
          ),
        ),
      ),
      'librarycards-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibraryCards/Home',
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'Home',
          ),
        ),
      ),
      'librarycards-selectcard' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibraryCards/SelectCard',
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'SelectCard',
          ),
        ),
      ),
      'librarycards-deletecard' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibraryCards/DeleteCard',
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'DeleteCard',
          ),
        ),
      ),
      'myresearch-account' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Account',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Account',
          ),
        ),
      ),
      'myresearch-changeemail' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/ChangeEmail',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'ChangeEmail',
          ),
        ),
      ),
      'myresearch-changepassword' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/ChangePassword',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'ChangePassword',
          ),
        ),
      ),
      'myresearch-checkedout' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/CheckedOut',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'CheckedOut',
          ),
        ),
      ),
      'myresearch-delete' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Delete',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Delete',
          ),
        ),
      ),
      'myresearch-deleteaccount' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/DeleteAccount',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'DeleteAccount',
          ),
        ),
      ),
      'myresearch-deletelist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/DeleteList',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'DeleteList',
          ),
        ),
      ),
      'myresearch-edit' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Edit',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Edit',
          ),
        ),
      ),
      'myresearch-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Email',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Email',
          ),
        ),
      ),
      'myresearch-emailnotverified' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/EmailNotVerified',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'EmailNotVerified',
          ),
        ),
      ),
      'myresearch-favorites' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Favorites',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Favorites',
          ),
        ),
      ),
      'myresearch-fines' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Fines',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Fines',
          ),
        ),
      ),
      'myresearch-historicloans' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/HistoricLoans',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'HistoricLoans',
          ),
        ),
      ),
      'myresearch-holds' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Holds',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Holds',
          ),
        ),
      ),
      'myresearch-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Home',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Home',
          ),
        ),
      ),
      'myresearch-illrequests' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/ILLRequests',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'ILLRequests',
          ),
        ),
      ),
      'myresearch-logout' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Logout',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Logout',
          ),
        ),
      ),
      'myresearch-newpassword' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/NewPassword',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'NewPassword',
          ),
        ),
      ),
      'myresearch-profile' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Profile',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Profile',
          ),
        ),
      ),
      'myresearch-recover' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Recover',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Recover',
          ),
        ),
      ),
      'myresearch-savesearch' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/SaveSearch',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'SaveSearch',
          ),
        ),
      ),
      'myresearch-storageretrievalrequests' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/StorageRetrievalRequests',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'StorageRetrievalRequests',
          ),
        ),
      ),
      'myresearch-unsubscribe' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Unsubscribe',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Unsubscribe',
          ),
        ),
      ),
      'myresearch-userlogin' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/UserLogin',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'UserLogin',
          ),
        ),
      ),
      'myresearch-verify' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Verify',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Verify',
          ),
        ),
      ),
      'myresearch-verifyemail' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/VerifyEmail',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'VerifyEmail',
          ),
        ),
      ),
      'oai-server' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/OAI/Server',
          'defaults' => 
          array (
            'controller' => 'OAI',
            'action' => 'Server',
          ),
        ),
      ),
      'overdrive-mycontent' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Overdrive/MyContent',
          'defaults' => 
          array (
            'controller' => 'Overdrive',
            'action' => 'MyContent',
          ),
        ),
      ),
      'overdrive-hold' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Overdrive/Hold',
          'defaults' => 
          array (
            'controller' => 'Overdrive',
            'action' => 'Hold',
          ),
        ),
      ),
      'pazpar2-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Pazpar2/Home',
          'defaults' => 
          array (
            'controller' => 'Pazpar2',
            'action' => 'Home',
          ),
        ),
      ),
      'pazpar2-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Pazpar2/Search',
          'defaults' => 
          array (
            'controller' => 'Pazpar2',
            'action' => 'Search',
          ),
        ),
      ),
      'primo-advanced' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Primo/Advanced',
          'defaults' => 
          array (
            'controller' => 'Primo',
            'action' => 'Advanced',
          ),
        ),
      ),
      'primo-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Primo/Home',
          'defaults' => 
          array (
            'controller' => 'Primo',
            'action' => 'Home',
          ),
        ),
      ),
      'primo-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Primo/Search',
          'defaults' => 
          array (
            'controller' => 'Primo',
            'action' => 'Search',
          ),
        ),
      ),
      'qrcode-show' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/QRCode/Show',
          'defaults' => 
          array (
            'controller' => 'QRCode',
            'action' => 'Show',
          ),
        ),
      ),
      'qrcode-unavailable' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/QRCode/Unavailable',
          'defaults' => 
          array (
            'controller' => 'QRCode',
            'action' => 'Unavailable',
          ),
        ),
      ),
      'records-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Records/Home',
          'defaults' => 
          array (
            'controller' => 'Records',
            'action' => 'Home',
          ),
        ),
      ),
      'relais-login' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Relais/Login',
          'defaults' => 
          array (
            'controller' => 'Relais',
            'action' => 'Login',
          ),
        ),
      ),
      'relais-request' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Relais/Request',
          'defaults' => 
          array (
            'controller' => 'Relais',
            'action' => 'Request',
          ),
        ),
      ),
      'search-advanced' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Advanced',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Advanced',
          ),
        ),
      ),
      'search-collectionfacetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/CollectionFacetList',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'CollectionFacetList',
          ),
        ),
      ),
      'search-editmemory' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/EditMemory',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'EditMemory',
          ),
        ),
      ),
      'search-email' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Email',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Email',
          ),
        ),
      ),
      'search-facetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/FacetList',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'FacetList',
          ),
        ),
      ),
      'search-history' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/History',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'History',
          ),
        ),
      ),
      'search-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Home',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Home',
          ),
        ),
      ),
      'search-newitem' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/NewItem',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'NewItem',
          ),
        ),
      ),
      'search-opensearch' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/OpenSearch',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'OpenSearch',
          ),
        ),
      ),
      'search-reserves' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Reserves',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Reserves',
          ),
        ),
      ),
      'search-reservesfacetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/ReservesFacetList',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'ReservesFacetList',
          ),
        ),
      ),
      'search-results' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Results',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Results',
          ),
        ),
      ),
      'search-suggest' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Suggest',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Suggest',
          ),
        ),
      ),
      'search2-advanced' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search2/Advanced',
          'defaults' => 
          array (
            'controller' => 'Search2',
            'action' => 'Advanced',
          ),
        ),
      ),
      'search2-facetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search2/FacetList',
          'defaults' => 
          array (
            'controller' => 'Search2',
            'action' => 'FacetList',
          ),
        ),
      ),
      'search2-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search2/Home',
          'defaults' => 
          array (
            'controller' => 'Search2',
            'action' => 'Home',
          ),
        ),
      ),
      'search2-results' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search2/Results',
          'defaults' => 
          array (
            'controller' => 'Search2',
            'action' => 'Results',
          ),
        ),
      ),
      'summon-advanced' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Advanced',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'Advanced',
          ),
        ),
      ),
      'summon-facetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/FacetList',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'FacetList',
          ),
        ),
      ),
      'summon-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Home',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'Home',
          ),
        ),
      ),
      'summon-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Search',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'Search',
          ),
        ),
      ),
      'tag-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Tag/Home',
          'defaults' => 
          array (
            'controller' => 'Tag',
            'action' => 'Home',
          ),
        ),
      ),
      'upgrade-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/Home',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'Home',
          ),
        ),
      ),
      'upgrade-fixanonymoustags' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixAnonymousTags',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixAnonymousTags',
          ),
        ),
      ),
      'upgrade-fixduplicatetags' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixDuplicateTags',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixDuplicateTags',
          ),
        ),
      ),
      'upgrade-fixconfig' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixConfig',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixConfig',
          ),
        ),
      ),
      'upgrade-fixdatabase' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixDatabase',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixDatabase',
          ),
        ),
      ),
      'upgrade-fixmetadata' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixMetadata',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixMetadata',
          ),
        ),
      ),
      'upgrade-getdbcredentials' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetDBCredentials',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetDBCredentials',
          ),
        ),
      ),
      'upgrade-getdbencodingpreference' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetDbEncodingPreference',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetDbEncodingPreference',
          ),
        ),
      ),
      'upgrade-getsourcedir' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetSourceDir',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetSourceDir',
          ),
        ),
      ),
      'upgrade-getsourceversion' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetSourceVersion',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetSourceVersion',
          ),
        ),
      ),
      'upgrade-reset' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/Reset',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'Reset',
          ),
        ),
      ),
      'upgrade-showsql' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/ShowSQL',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'ShowSQL',
          ),
        ),
      ),
      'web-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Web/Home',
          'defaults' => 
          array (
            'controller' => 'Web',
            'action' => 'Home',
          ),
        ),
      ),
      'web-facetlist' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Web/FacetList',
          'defaults' => 
          array (
            'controller' => 'Web',
            'action' => 'FacetList',
          ),
        ),
      ),
      'web-results' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Web/Results',
          'defaults' => 
          array (
            'controller' => 'Web',
            'action' => 'Results',
          ),
        ),
      ),
      'worldcat-advanced' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Worldcat/Advanced',
          'defaults' => 
          array (
            'controller' => 'Worldcat',
            'action' => 'Advanced',
          ),
        ),
      ),
      'worldcat-home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Worldcat/Home',
          'defaults' => 
          array (
            'controller' => 'Worldcat',
            'action' => 'Home',
          ),
        ),
      ),
      'worldcat-search' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Worldcat/Search',
          'defaults' => 
          array (
            'controller' => 'Worldcat',
            'action' => 'Search',
          ),
        ),
      ),
      'home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'index',
            'action' => 'Home',
          ),
        ),
      ),
      'admin' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Admin',
          'defaults' => 
          array (
            'controller' => 'Admin',
            'action' => 'Home',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'disabled' => 
          array (
            'type' => 'Laminas\\Router\\Http\\Literal',
            'options' => 
            array (
              'route' => '/Disabled',
              'defaults' => 
              array (
                'controller' => 'Admin',
                'action' => 'Disabled',
              ),
            ),
          ),
          'config' => 
          array (
            'type' => 'Laminas\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Config[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminConfig',
                'action' => 'Home',
              ),
            ),
          ),
          'maintenance' => 
          array (
            'type' => 'Laminas\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Maintenance[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminMaintenance',
                'action' => 'Home',
              ),
            ),
          ),
          'social' => 
          array (
            'type' => 'Laminas\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Social[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminSocial',
                'action' => 'Home',
              ),
            ),
          ),
          'tags' => 
          array (
            'type' => 'Laminas\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Tags[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminTags',
                'action' => 'Home',
              ),
            ),
          ),
          'overdrive' => 
          array (
            'type' => 'Laminas\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Overdrive',
              'defaults' => 
              array (
                'controller' => 'AdminOverdrive',
                'action' => 'Home',
              ),
            ),
          ),
        ),
      ),
      'apiHome' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api[/v1][/]',
          'defaults' => 
          array (
            'controller' => 'Api',
            'action' => 'Index',
          ),
        ),
      ),
      'searchApiv1' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/search',
          'defaults' => 
          array (
            'controller' => 'SearchApi',
            'action' => 'search',
          ),
        ),
      ),
      'recordApiv1' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/record',
          'defaults' => 
          array (
            'controller' => 'SearchApi',
            'action' => 'record',
          ),
        ),
      ),
      'search2Apiv1' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/index2/search',
          'defaults' => 
          array (
            'controller' => 'Search2Api',
            'action' => 'search',
          ),
        ),
      ),
      'record2Apiv1' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/index2/record',
          'defaults' => 
          array (
            'controller' => 'Search2Api',
            'action' => 'record',
          ),
        ),
      ),
      'websearchApiv1' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/web/search',
          'defaults' => 
          array (
            'controller' => 'WebApi',
            'action' => 'search',
          ),
        ),
      ),
      'webrecordApiv1' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/web/record',
          'defaults' => 
          array (
            'controller' => 'WebApi',
            'action' => 'record',
          ),
        ),
      ),
    ),
  ),
  'controller_plugins' => 
  array (
    'factories' => 
    array (
      'LmcRbacMvc\\Mvc\\Controller\\Plugin\\IsGranted' => 'LmcRbacMvc\\Factory\\IsGrantedPluginFactory',
      'VuFind\\Controller\\Plugin\\Captcha' => 'VuFind\\Controller\\Plugin\\CaptchaFactory',
      'VuFind\\Controller\\Plugin\\DbUpgrade' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Controller\\Plugin\\Favorites' => 'VuFind\\Controller\\Plugin\\FavoritesFactory',
      'VuFind\\Controller\\Plugin\\Followup' => 'VuFind\\Controller\\Plugin\\FollowupFactory',
      'VuFind\\Controller\\Plugin\\Holds' => 'VuFind\\Controller\\Plugin\\AbstractRequestBaseFactory',
      'VuFind\\Controller\\Plugin\\ILLRequests' => 'VuFind\\Controller\\Plugin\\AbstractRequestBaseFactory',
      'VuFind\\Controller\\Plugin\\NewItems' => 'VuFind\\Controller\\Plugin\\NewItemsFactory',
      'VuFind\\Controller\\Plugin\\Permission' => 'VuFind\\Controller\\Plugin\\PermissionFactory',
      'VuFind\\Controller\\Plugin\\Renewals' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Controller\\Plugin\\Reserves' => 'VuFind\\Controller\\Plugin\\ReservesFactory',
      'VuFind\\Controller\\Plugin\\ResultScroller' => 'VuFind\\Controller\\Plugin\\ResultScrollerFactory',
      'VuFind\\Controller\\Plugin\\StorageRetrievalRequests' => 'VuFind\\Controller\\Plugin\\AbstractRequestBaseFactory',
      'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'VuFind\\Controller\\Plugin\\FlashMessengerFactory',
    ),
    'aliases' => 
    array (
      'isGranted' => 'LmcRbacMvc\\Mvc\\Controller\\Plugin\\IsGranted',
      'captcha' => 'VuFind\\Controller\\Plugin\\Captcha',
      'dbUpgrade' => 'VuFind\\Controller\\Plugin\\DbUpgrade',
      'favorites' => 'VuFind\\Controller\\Plugin\\Favorites',
      'flashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'followup' => 'VuFind\\Controller\\Plugin\\Followup',
      'holds' => 'VuFind\\Controller\\Plugin\\Holds',
      'ILLRequests' => 'VuFind\\Controller\\Plugin\\ILLRequests',
      'newItems' => 'VuFind\\Controller\\Plugin\\NewItems',
      'permission' => 'VuFind\\Controller\\Plugin\\Permission',
      'renewals' => 'VuFind\\Controller\\Plugin\\Renewals',
      'reserves' => 'VuFind\\Controller\\Plugin\\Reserves',
      'resultScroller' => 'VuFind\\Controller\\Plugin\\ResultScroller',
      'storageRetrievalRequests' => 'VuFind\\Controller\\Plugin\\StorageRetrievalRequests',
    ),
    'initializers' => 
    array (
      0 => 'VuFind\\ServiceManager\\ServiceInitializer',
    ),
  ),
  'view_manager' => 
  array (
    'template_map' => 
    array (
      'error/403' => '/usr/local/vufind/vendor/laminas-commons/lmc-rbac-mvc/config/../view/error/403.phtml',
      'laminas-developer-tools/toolbar/lmc-rbac' => '/usr/local/vufind/vendor/laminas-commons/lmc-rbac-mvc/config/../view/laminas-developer-tools/toolbar/lmc-rbac.phtml',
    ),
    'display_not_found_reason' => false,
    'display_exceptions' => false,
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_path_stack' => 
    array (
    ),
    'whoops_no_catch' => 
    array (
      0 => 'VuFind\\Exception\\RecordMissing',
    ),
  ),
  'laminas-developer-tools' => 
  array (
    'profiler' => 
    array (
      'collectors' => 
      array (
        'lmc_rbac' => 'LmcRbacMvc\\Collector\\RbacCollector',
      ),
    ),
    'toolbar' => 
    array (
      'entries' => 
      array (
        'lmc_rbac' => 'laminas-developer-tools/toolbar/lmc-rbac',
      ),
    ),
  ),
  'lmc_rbac' => 
  array (
    'guard_manager' => 
    array (
    ),
    'role_provider_manager' => 
    array (
      'factories' => 
      array (
        'VuFind\\Role\\DynamicRoleProvider' => 'VuFind\\Role\\DynamicRoleProviderFactory',
      ),
    ),
    'assertion_manager' => 
    array (
    ),
    'identity_provider' => 'VuFind\\Auth\\Manager',
    'guest_role' => 'guest',
    'role_provider' => 
    array (
      'VuFind\\Role\\DynamicRoleProvider' => 
      array (
        'map_legacy_settings' => true,
      ),
    ),
    'vufind_permission_provider_manager' => 
    array (
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'VuFind\\Controller\\AjaxController' => 'VuFind\\Controller\\AjaxControllerFactory',
      'VuFind\\Controller\\AlmaController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\AlphabrowseController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\AuthorController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\AuthorityController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\BrowseController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\BrowZineController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\CartController' => 'VuFind\\Controller\\CartControllerFactory',
      'VuFind\\Controller\\ChannelsController' => 'VuFind\\Controller\\ChannelsControllerFactory',
      'VuFind\\Controller\\CollectionController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\CollectionsController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\CombinedController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ConfirmController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ContentController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\CoverController' => 'VuFind\\Controller\\CoverControllerFactory',
      'VuFind\\Controller\\EdsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\EdsrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\EITController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\EITrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ErrorController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ExternalAuthController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\FeedbackController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\Search2Controller' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\Search2recordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\Search2collectionController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\HelpController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\HierarchyController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\IndexController' => 'VuFind\\Controller\\IndexControllerFactory',
      'VuFind\\Controller\\InstallController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\LibGuidesController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\LibraryCardsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\MissingrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\MyResearchController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\OaiController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\OverdriveController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\Pazpar2Controller' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\PrimoController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\PrimorecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\QRCodeController' => 'VuFind\\Controller\\QRCodeControllerFactory',
      'VuFind\\Controller\\RecordController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\RecordsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\RelaisController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\SearchController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ShibbolethLogoutNotificationController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ShortlinkController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\SummonController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\SummonrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\TagController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\UpgradeController' => 'VuFind\\Controller\\UpgradeControllerFactory',
      'VuFind\\Controller\\WebController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\WorldcatController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\WorldcatrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\AdminController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\ConfigController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\MaintenanceController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\SocialstatsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\TagsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\OverdriveController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindApi\\Controller\\ApiController' => 'VuFindApi\\Controller\\ApiControllerFactory',
      'VuFindApi\\Controller\\SearchApiController' => 'VuFindApi\\Controller\\SearchApiControllerFactory',
      'VuFindApi\\Controller\\Search2ApiController' => 'VuFindApi\\Controller\\Search2ApiControllerFactory',
      'VuFindApi\\Controller\\WebApiController' => 'VuFindApi\\Controller\\WebApiControllerFactory',
    ),
    'initializers' => 
    array (
      0 => 'VuFind\\ServiceManager\\ServiceInitializer',
    ),
    'aliases' => 
    array (
      'AJAX' => 'VuFind\\Controller\\AjaxController',
      'ajax' => 'VuFind\\Controller\\AjaxController',
      'Alma' => 'VuFind\\Controller\\AlmaController',
      'alma' => 'VuFind\\Controller\\AlmaController',
      'Alphabrowse' => 'VuFind\\Controller\\AlphabrowseController',
      'alphabrowse' => 'VuFind\\Controller\\AlphabrowseController',
      'Author' => 'VuFind\\Controller\\AuthorController',
      'author' => 'VuFind\\Controller\\AuthorController',
      'Authority' => 'VuFind\\Controller\\AuthorityController',
      'authority' => 'VuFind\\Controller\\AuthorityController',
      'Browse' => 'VuFind\\Controller\\BrowseController',
      'browse' => 'VuFind\\Controller\\BrowseController',
      'BrowZine' => 'VuFind\\Controller\\BrowZineController',
      'browzine' => 'VuFind\\Controller\\BrowZineController',
      'Cart' => 'VuFind\\Controller\\CartController',
      'cart' => 'VuFind\\Controller\\CartController',
      'Channels' => 'VuFind\\Controller\\ChannelsController',
      'channels' => 'VuFind\\Controller\\ChannelsController',
      'Collection' => 'VuFind\\Controller\\CollectionController',
      'collection' => 'VuFind\\Controller\\CollectionController',
      'Collections' => 'VuFind\\Controller\\CollectionsController',
      'collections' => 'VuFind\\Controller\\CollectionsController',
      'Combined' => 'VuFind\\Controller\\CombinedController',
      'combined' => 'VuFind\\Controller\\CombinedController',
      'Confirm' => 'VuFind\\Controller\\ConfirmController',
      'confirm' => 'VuFind\\Controller\\ConfirmController',
      'Content' => 'VuFind\\Controller\\ContentController',
      'content' => 'VuFind\\Controller\\ContentController',
      'Cover' => 'VuFind\\Controller\\CoverController',
      'cover' => 'VuFind\\Controller\\CoverController',
      'EDS' => 'VuFind\\Controller\\EdsController',
      'eds' => 'VuFind\\Controller\\EdsController',
      'EdsRecord' => 'VuFind\\Controller\\EdsrecordController',
      'edsrecord' => 'VuFind\\Controller\\EdsrecordController',
      'EIT' => 'VuFind\\Controller\\EITController',
      'eit' => 'VuFind\\Controller\\EITController',
      'EITRecord' => 'VuFind\\Controller\\EITrecordController',
      'eitrecord' => 'VuFind\\Controller\\EITrecordController',
      'Error' => 'VuFind\\Controller\\ErrorController',
      'error' => 'VuFind\\Controller\\ErrorController',
      'ExternalAuth' => 'VuFind\\Controller\\ExternalAuthController',
      'externalauth' => 'VuFind\\Controller\\ExternalAuthController',
      'Feedback' => 'VuFind\\Controller\\FeedbackController',
      'feedback' => 'VuFind\\Controller\\FeedbackController',
      'Search2' => 'VuFind\\Controller\\Search2Controller',
      'search2' => 'VuFind\\Controller\\Search2Controller',
      'Search2Collection' => 'VuFind\\Controller\\Search2collectionController',
      'search2collection' => 'VuFind\\Controller\\Search2collectionController',
      'Search2Record' => 'VuFind\\Controller\\Search2recordController',
      'search2record' => 'VuFind\\Controller\\Search2recordController',
      'Help' => 'VuFind\\Controller\\HelpController',
      'help' => 'VuFind\\Controller\\HelpController',
      'Hierarchy' => 'VuFind\\Controller\\HierarchyController',
      'hierarchy' => 'VuFind\\Controller\\HierarchyController',
      'Index' => 'VuFind\\Controller\\IndexController',
      'index' => 'VuFind\\Controller\\IndexController',
      'Install' => 'VuFind\\Controller\\InstallController',
      'install' => 'VuFind\\Controller\\InstallController',
      'LibGuides' => 'VuFind\\Controller\\LibGuidesController',
      'libguides' => 'VuFind\\Controller\\LibGuidesController',
      'LibraryCards' => 'VuFind\\Controller\\LibraryCardsController',
      'librarycards' => 'VuFind\\Controller\\LibraryCardsController',
      'MissingRecord' => 'VuFind\\Controller\\MissingrecordController',
      'missingrecord' => 'VuFind\\Controller\\MissingrecordController',
      'MyResearch' => 'VuFind\\Controller\\MyResearchController',
      'myresearch' => 'VuFind\\Controller\\MyResearchController',
      'OAI' => 'VuFind\\Controller\\OaiController',
      'oai' => 'VuFind\\Controller\\OaiController',
      'Overdrive' => 'VuFind\\Controller\\OverdriveController',
      'overdrive' => 'VuFind\\Controller\\OverdriveController',
      'Pazpar2' => 'VuFind\\Controller\\Pazpar2Controller',
      'pazpar2' => 'VuFind\\Controller\\Pazpar2Controller',
      'Primo' => 'VuFind\\Controller\\PrimoController',
      'primo' => 'VuFind\\Controller\\PrimoController',
      'PrimoRecord' => 'VuFind\\Controller\\PrimorecordController',
      'primorecord' => 'VuFind\\Controller\\PrimorecordController',
      'QRCode' => 'VuFind\\Controller\\QRCodeController',
      'qrcode' => 'VuFind\\Controller\\QRCodeController',
      'Record' => 'VuFind\\Controller\\RecordController',
      'record' => 'VuFind\\Controller\\RecordController',
      'Records' => 'VuFind\\Controller\\RecordsController',
      'records' => 'VuFind\\Controller\\RecordsController',
      'Relais' => 'VuFind\\Controller\\RelaisController',
      'relais' => 'VuFind\\Controller\\RelaisController',
      'Search' => 'VuFind\\Controller\\SearchController',
      'search' => 'VuFind\\Controller\\SearchController',
      'ShibbolethLogoutNotification' => 'VuFind\\Controller\\ShibbolethLogoutNotificationController',
      'shibbolethlogoutnotification' => 'VuFind\\Controller\\ShibbolethLogoutNotificationController',
      'Shortlink' => 'VuFind\\Controller\\ShortlinkController',
      'shortlink' => 'VuFind\\Controller\\ShortlinkController',
      'Summon' => 'VuFind\\Controller\\SummonController',
      'summon' => 'VuFind\\Controller\\SummonController',
      'SummonRecord' => 'VuFind\\Controller\\SummonrecordController',
      'summonrecord' => 'VuFind\\Controller\\SummonrecordController',
      'Tag' => 'VuFind\\Controller\\TagController',
      'tag' => 'VuFind\\Controller\\TagController',
      'Upgrade' => 'VuFind\\Controller\\UpgradeController',
      'upgrade' => 'VuFind\\Controller\\UpgradeController',
      'Web' => 'VuFind\\Controller\\WebController',
      'web' => 'VuFind\\Controller\\WebController',
      'Worldcat' => 'VuFind\\Controller\\WorldcatController',
      'worldcat' => 'VuFind\\Controller\\WorldcatController',
      'WorldcatRecord' => 'VuFind\\Controller\\WorldcatrecordController',
      'worldcatrecord' => 'VuFind\\Controller\\WorldcatrecordController',
      'Admin' => 'VuFindAdmin\\Controller\\AdminController',
      'AdminConfig' => 'VuFindAdmin\\Controller\\ConfigController',
      'AdminMaintenance' => 'VuFindAdmin\\Controller\\MaintenanceController',
      'AdminSocial' => 'VuFindAdmin\\Controller\\SocialstatsController',
      'AdminTags' => 'VuFindAdmin\\Controller\\TagsController',
      'AdminOverdrive' => 'VuFindAdmin\\Controller\\OverdriveController',
      'Api' => 'VuFindApi\\Controller\\ApiController',
      'SearchApi' => 'VuFindApi\\Controller\\SearchApiController',
      'Search2Api' => 'VuFindApi\\Controller\\Search2ApiController',
      'WebApi' => 'VuFindApi\\Controller\\WebApiController',
    ),
  ),
  'translator' => 
  array (
  ),
  'vufind' => 
  array (
    'config_reader' => 
    array (
    ),
    'pgsql_seq_mapping' => 
    array (
      'auth_hash' => 
      array (
        0 => 'id',
        1 => 'auth_hash_id_seq',
      ),
      'comments' => 
      array (
        0 => 'id',
        1 => 'comments_id_seq',
      ),
      'external_session' => 
      array (
        0 => 'id',
        1 => 'external_session_id_seq',
      ),
      'oai_resumption' => 
      array (
        0 => 'id',
        1 => 'oai_resumption_id_seq',
      ),
      'record' => 
      array (
        0 => 'id',
        1 => 'record_id_seq',
      ),
      'resource' => 
      array (
        0 => 'id',
        1 => 'resource_id_seq',
      ),
      'resource_tags' => 
      array (
        0 => 'id',
        1 => 'resource_tags_id_seq',
      ),
      'search' => 
      array (
        0 => 'id',
        1 => 'search_id_seq',
      ),
      'session' => 
      array (
        0 => 'id',
        1 => 'session_id_seq',
      ),
      'shortlinks' => 
      array (
        0 => 'id',
        1 => 'shortlinks_id_seq',
      ),
      'tags' => 
      array (
        0 => 'id',
        1 => 'tags_id_seq',
      ),
      'user' => 
      array (
        0 => 'id',
        1 => 'user_id_seq',
      ),
      'user_card' => 
      array (
        0 => 'id',
        1 => 'user_card_id_seq',
      ),
      'user_list' => 
      array (
        0 => 'id',
        1 => 'user_list_id_seq',
      ),
      'user_resource' => 
      array (
        0 => 'id',
        1 => 'user_resource_id_seq',
      ),
    ),
    'plugin_managers' => 
    array (
      'ajaxhandler' => 
      array (
      ),
      'auth' => 
      array (
      ),
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
      'captcha' => 
      array (
      ),
      'channelprovider' => 
      array (
      ),
      'content' => 
      array (
      ),
      'content_authornotes' => 
      array (
      ),
      'content_covers' => 
      array (
      ),
      'content_excerpts' => 
      array (
      ),
      'content_reviews' => 
      array (
      ),
      'content_summaries' => 
      array (
      ),
      'content_toc' => 
      array (
      ),
      'contentblock' => 
      array (
      ),
      'cover_layer' => 
      array (
      ),
      'db_row' => 
      array (
      ),
      'db_table' => 
      array (
      ),
      'doilinker' => 
      array (
      ),
      'hierarchy_driver' => 
      array (
      ),
      'hierarchy_treedataformatter' => 
      array (
      ),
      'hierarchy_treedatasource' => 
      array (
      ),
      'hierarchy_treerenderer' => 
      array (
      ),
      'ils_driver' => 
      array (
      ),
      'metadatavocabulary' => 
      array (
      ),
      'recommend' => 
      array (
      ),
      'record_fallbackloader' => 
      array (
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
      'recordtab' => 
      array (
      ),
      'related' => 
      array (
      ),
      'resolver_driver' => 
      array (
      ),
      'search_backend' => 
      array (
      ),
      'search_facetcache' => 
      array (
      ),
      'search_options' => 
      array (
      ),
      'search_params' => 
      array (
      ),
      'search_results' => 
      array (
      ),
      'session' => 
      array (
      ),
      'urlshortener' => 
      array (
      ),
    ),
  ),
);