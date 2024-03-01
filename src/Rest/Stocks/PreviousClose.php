<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class PreviousClose
 *
 * @package PolygonIO\Rest\Stocks
 */
class PreviousClose extends RestResource
{
    protected $route = '/v2/aggs/ticker/';

    /**
     * @param $tickerSymbol
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol, $params = []): array
    {
        return $this->_get($this->route . $tickerSymbol . '/prev', $params);
    }

}
