<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class StockDividends
 *
 * @package PolygonIO\rest\reference
 */
class StockDividends extends RestResource
{
    protected $route = '/v3/reference/dividends';

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
