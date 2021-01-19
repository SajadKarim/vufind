<?php

namespace VuFindGEI\Record;

use VuFindSearch\ParamBag;
use VuFind\Record\Checklist;
use VuFindSearch\Query\Query;



class Loader extends \VuFind\Record\Loader
{
    /**
     * Given an array of associative arrays with id and source keys (or pipe-
     * separated source|id strings), load all of the requested records in the
     * requested order.
     *
     * @param array      $ids                       Array of associative arrays with
     * id/source keys or strings in source|id format.  In associative array formats,
     * there is also an optional "extra_fields" key which can be used to pass in data
     * formatted as if it belongs to the Solr schema; this is used to create
     * a mock driver object if the real data source is unavailable.
     * @param bool       $tolerateBackendExceptions Whether to tolerate backend
     * exceptions that may be caused by e.g. connection issues or changes in
     * subcscriptions
     * @param ParamBag[] $params                    Associative array of search
     * backend parameters keyed with source key
     *
     * @throws \Exception
     * @return array     Array of record drivers
     */
    public function loadBatchPagewise(
        $query, $offset, $limit, $tolerateBackendExceptions = false, $params = []
    ) {   

        //$query  = new Query($queryString);//$this->getParams()->getQuery();
        //$limit  = 1000;//$this->getParams()->getLimit();
        //$offset = 10;//$this->getStartRecord() - 1;
        //$params = $this->getParams()->getBackendParameters();
        //$searchService = $this->getSearchService();
        //$cursorMark = $this->getCursorMark();

        /*if (null !== $cursorMark) {
            $params->set('cursorMark', '' === $cursorMark ? '*' : $cursorMark);
            // Override any default timeAllowed since it cannot be used with
            // cursorMark
            $params->set('timeAllowed', -1);
        }*/

	$records = [];
        try {
            $records = $this->searchService
                ->search(/*$this->backendId*/ 'Solr', $query, $offset, $limit/*, $params*/)->getRecords();
        } catch (\VuFindSearch\Backend\Exception\BackendException $e) {
            // If the query caused a parser error, see if we can clean it up:
            if ($e->hasTag('VuFind\Search\ParserError')
                && $newQuery = $this->fixBadQuery($query)
            ) {
                // We need to get a fresh set of $params, since the previous one was
                // manipulated by the previous search() call.
                $params = $this->getParams()->getBackendParameters();
                $records = $searchService
                    ->search($this->backendId, $newQuery, $offset, $limit, $params)->getRecords();
            } else {
                throw $e;
            }
        }

        return $records;
    }

    /**
     * Given an array of associative arrays with id and source keys (or pipe-
     * separated source|id strings), load all of the requested records in the
     * requested order.
     *
     * @param array      $ids                       Array of associative arrays with
     * id/source keys or strings in source|id format.  In associative array formats,
     * there is also an optional "extra_fields" key which can be used to pass in data
     * formatted as if it belongs to the Solr schema; this is used to create
     * a mock driver object if the real data source is unavailable.
     * @param bool       $tolerateBackendExceptions Whether to tolerate backend
     * exceptions that may be caused by e.g. connection issues or changes in
     * subcscriptions
     * @param ParamBag[] $params                    Associative array of search
     * backend parameters keyed with source key
     *
     * @throws \Exception
     * @return array     Array of record drivers
     */
    public function loadBatchForIds(
        $query, $offset, $limit, $tolerateBackendExceptions = false, $params = []
    ) {   
    
	$records = [];
        try {
            $records = $this->searchService
                ->search(/*$this->backendId*/ 'Solr', $query, $offset, $limit/*, $params*/)->getRecords();
        } catch (\VuFindSearch\Backend\Exception\BackendException $e) {
            // If the query caused a parser error, see if we can clean it up:
            if ($e->hasTag('VuFind\Search\ParserError')
                && $newQuery = $this->fixBadQuery($query)
            ) {
                // We need to get a fresh set of $params, since the previous one was
                // manipulated by the previous search() call.
                $params = $this->getParams()->getBackendParameters();
                $records = $searchService
                    ->search($this->backendId, $newQuery, $offset, $limit, $params)->getRecords();
            } else {
                throw $e;
            }
        }

        return $records;
    }
    
    public function getTotalRecords($query, $params = []) {   

        //$query  = new Query('');//$this->getParams()->getQuery();
        //$limit  = 10;//$this->getParams()->getLimit();
        //$offset = 10;//$this->getStartRecord() - 1;
        //$params = $this->getParams()->getBackendParameters();
        //$searchService = $this->getSearchService();
        //$cursorMark = $this->getCursorMark();

        /*if (null !== $cursorMark) {
            $params->set('cursorMark', '' === $cursorMark ? '*' : $cursorMark);
            // Override any default timeAllowed since it cannot be used with
            // cursorMark
            $params->set('timeAllowed', -1);
        }*/

	$total = 0;
        try {
            $total = $this->searchService
                ->search(/*$this->backendId*/ 'Solr', $query, /*$offset, $limit, $params*/)->getTotal();
        } catch (\VuFindSearch\Backend\Exception\BackendException $e) {
            // If the query caused a parser error, see if we can clean it up:
            if ($e->hasTag('VuFind\Search\ParserError')
                && $newQuery = $this->fixBadQuery($query)
            ) {
                // We need to get a fresh set of $params, since the previous one was
                // manipulated by the previous search() call.
                $params = $this->getParams()->getBackendParameters();
                $total = $searchService
                    ->search($this->backendId, $newQuery, $offset, $limit, $params)->getTotal();
            } else {
                throw $e;
            }
        }

        return $total;
    }
}

