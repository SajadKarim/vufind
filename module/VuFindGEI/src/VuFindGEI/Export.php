<?php

namespace VuFindGEI;

class Export extends \VuFind\Export
{
     protected $queryString;
     
    /**
     * Get the URL for bulk export.
     *
     * @param RendererInterface $view   View object (needed for URL generation)
     * @param string            $format Export format being used
     * @param array             $ids    Array of IDs to export (in source|id format)
     *
     * @return string
     */
    public function getBulkAllUrl($view, $format, $queryString)
    {
        $params = [];
        $params[] = 'f=' . urlencode($format);
        $params[] = 'ss=' . urlencode($queryString);

        //foreach ($ids as $id) {
        //    $params[] = urlencode('i[]') . '=' . urlencode($id);
        //}
        $serverUrlHelper = $view->plugin('serverurl');
        $urlHelper = $view->plugin('url');
        $url = $serverUrlHelper($urlHelper('cart-doexport'))
            . 'all?' . implode('&', $params);	//TODO: need to add cart-doexportall!

        return $this->needsRedirect($format)
            ? $this->getRedirectUrl($format, $url) : $url;
    }
    
    public function setQueryString($queryString)
    {
      $this->queryString = $queryString;
    }
    
    public function getQueryString()
    {
      return $this->queryString;
    }

}

