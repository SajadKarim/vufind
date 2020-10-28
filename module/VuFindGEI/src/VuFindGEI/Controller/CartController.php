<?php

namespace VuFindGEI\Controller;


use VuFind\Search\Base\Options;
use Laminas\Config\Config;
use VuFind\I18n\Translator\TranslatorAwareInterface;
use \VuFind\Search\Options\ViewOptionsTrait;
use \VuFind\I18n\Translator\TranslatorAwareTrait;
use \VuFind\Config\PluginManager;

class CartController extends \VuFind\Controller\CartController
{

    /**
     * Figure out an action from the request....
     *
     * @param string $default Default action if none can be determined.
     *
     * @return string
     */
    protected function getCartActionFromRequest($default = 'Home')
    {
        if (strlen($this->params()->fromPost('email', '')) > 0) {
            return 'Email';
        } elseif (strlen($this->params()->fromPost('print', '')) > 0) {
            return 'PrintCart';
        } elseif (strlen($this->params()->fromPost('saveCart', '')) > 0) {
            return 'Save';
        } elseif (strlen($this->params()->fromPost('export', '')) > 0) {
        	if ("2" == $this->params()->fromPost('export')) {
            		return 'ExportAll';
            	}
    		return 'Export';
        }
        // Check if the user is in the midst of a login process; if not,
        // use the provided default.
        return $this->followup()->retrieveAndClear('cartAction', $default);
    }

    /**
     * Set up export of a batch of records.
     *
     * @return mixed
     */
    public function exportallAction()
    {
	$rawRequest = [];
      	$queryString = html_entity_decode(parse_url($this->params()->fromPost('currentQueryString'))['query']);
    	parse_str($queryString, $rawRequest);

        // Format the request object:
        $request = $rawRequest instanceof Parameters
            ? $rawRequest
            : new \Laminas\Stdlib\Parameters(is_array($rawRequest) ? $rawRequest : []);

	$configManager = $this->getPluginManager();
	$options = new \VuFind\Search\Solr\Options(new \VuFind\Config\PluginManager(null));
	$params = new \VuFind\Search\Solr\Params($options, new \VuFind\Config\PluginManager(null));

        // Get export tools:
        $export = $this->getExport();
	$export->setQueryString($this->params()->fromPost('currentQueryString'));

        // Process form submission if necessary:
        if ($this->formWasSubmitted('submit')) {
            $format = $this->params()->fromPost('format');
            $url = $export->getBulkAllUrl($this->getViewRenderer(), $format, $this->params()->fromPost('currentQueryString'));

	// TODO: I commented out the following code as the query string does not contains Ids anymore.
            /*if ($export->needsRedirect($format)) {
                return $this->redirect()->toUrl($url);
            }*/
            $exportType = $export->getBulkExportType($format);
            $params = [
                'exportType' => $exportType,
                'format' => $format
            ];
            /*if ('post' === $exportType) {
                $records = $this->getRecordLoader()->loadBatch($ids);
                $recordHelper = $this->getViewRenderer()->plugin('record');
                $parts = [];
                foreach ($records as $record) {
                    $parts[] = $recordHelper($record)->getExport($format);
                }

                $params['postField'] = $export->getPostField($format);
                $params['postData'] = $export->processGroup($format, $parts);
                $params['targetWindow'] = $export->getTargetWindow($format);
                $params['url'] = $export->getRedirectUrl($format, '');
            } else {
            */
                $params['url'] = $url;
            /*}*/
            $msg = [
                'translate' => false, 'html' => true,
                'msg' => $this->getViewRenderer()->render(
                    'cart/export-success.phtml', $params
                )
            ];
            return $this->redirectToSource('success', $msg);
        }

        // Load the records:
        $view = $this->createViewModel();
        $view->records = [];

        // Assign the list of legal export options.  We'll filter them down based
        // on what the selected records actually support.
        $view->exportOptions = $export->getFormatsForRecords($view->records);

        // No legal export options?  Display a warning:
        if (empty($view->exportOptions)) {
            $this->flashMessenger()
                ->addMessage('bulk_export_not_supported', 'error');
        }
        
        $allowedLimit = $this->getConfig()->BulkExport->max_records_allowed;
        
	if ( $allowedLimit < $this->getRecordLoader()->getTotalRecords($params->getQuery())) {
            $this->flashMessenger()
                ->addMessage('You are exceeding the limit to export the records. Only the first '. number_format($allowedLimit).' record(s) can be exported with your current settings.', 'info');
	}

        return $view;
    }

    /**
     * Actually perform the export operation.
     *
     * @return mixed
     */
    public function doexportallAction()
    {
    	$searchString = $this->params()->fromQuery('ss');
    
  	$rawRequest = [];
      	$queryString = html_entity_decode(parse_url($searchString)['query']);
    	parse_str($queryString, $rawRequest);

        // Format the request object:
        $request = $rawRequest instanceof Parameters
            ? $rawRequest
            : new \Laminas\Stdlib\Parameters(is_array($rawRequest) ? $rawRequest : []);

	$configManager = $this->getPluginManager();
	$options = new \VuFind\Search\Solr\Options(new \VuFind\Config\PluginManager(null));
	$params = new \VuFind\Search\Solr\Params($options, new \VuFind\Config\PluginManager(null));

    
	$recordsPerRequest = $this->getConfig()->BulkExport->records_per_request;
        $allowedLimit = $this->getConfig()->BulkExport->max_records_allowed;
	
	for ($page = 0; $page < $allowedLimit; $page += $recordsPerRequest)
	{
          $records = $collection = $this->getRecordLoader()->loadBatchPagewise($params->getQuery(), $page, $recordsPerRequest);	
	}

        // We use abbreviated parameters here to keep the URL short (there may
        // be a long list of IDs, and we don't want to run out of room):
        //$ids = $this->params()->fromQuery('i', []);
        $format = $this->params()->fromQuery('f');

        // Make sure we have IDs to export:
        //if (!is_array($ids) || empty($ids)) {
        //    return $this->redirectToSource('error', 'bulk_noitems_advice');
        //}

        // Send appropriate HTTP headers for requested format:
        $response = $this->getResponse();
        $response->getHeaders()->addHeaders($this->getExport()->getHeaders($format));

        // Actually export the records
        //$records = $collection = $this->getRecordLoader()->loadBatchPagewise(0);
        $recordHelper = $this->getViewRenderer()->plugin('record');
        $parts = [];
        foreach ($records as $record) {
            $parts[] = $recordHelper($record)->getExport($format);
        }

        // Process and display the exported records
        $response->setContent($this->getExport()->processGroup($format, $parts));
        return $response;
    }

}

