<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class StockSplits
 *
 * @package PolygonIO\rest\reference
 */
class StockSplits extends RestResource
{
    protected $route = '/v3/reference/splits';

    /**
     * @param  string  $tickerSymbol
     *
     * @return mixed
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params = [])
    {
        return $this->_get($this->route, $params);
    }
}
