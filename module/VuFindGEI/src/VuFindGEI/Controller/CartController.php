<?php

namespace VuFindGEI\Controller;

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

	//TODO: Complete the functionality.
        // Get the desired ID list:
        $ids = null === $this->params()->fromPost('selectAll')
            ? $this->params()->fromPost('ids')
            : $this->params()->fromPost('idsAll');
        if (!is_array($ids) || empty($ids)) {
            return $this->redirectToSource('error', 'bulk_noitems_advice');
        }

        // Get export tools:
        $export = $this->getExport();

        // Process form submission if necessary:
        if ($this->formWasSubmitted('submit')) {
            $format = $this->params()->fromPost('format');
            $url = $export->getBulkUrl($this->getViewRenderer(), $format, $ids);
            if ($export->needsRedirect($format)) {
                return $this->redirect()->toUrl($url);
            }
            $exportType = $export->getBulkExportType($format);
            $params = [
                'exportType' => $exportType,
                'format' => $format
            ];
            if ('post' === $exportType) {
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
                $params['url'] = $url;
            }
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
        $view->records = $this->getRecordLoader()->loadBatch($ids);

        // Assign the list of legal export options.  We'll filter them down based
        // on what the selected records actually support.
        $view->exportOptions = $export->getFormatsForRecords($view->records);

        // No legal export options?  Display a warning:
        if (empty($view->exportOptions)) {
            $this->flashMessenger()
                ->addMessage('bulk_export_not_supported', 'error');
        }
        return $view;
    }

}

