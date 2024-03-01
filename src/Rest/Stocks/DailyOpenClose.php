<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class DailyOpenClose
 *
 * @package PolygonIO\Rest\Stocks
 */
class DailyOpenClose extends RestResource
{
    protected $route = '/v1/open-close/';

    /**
     * @param $tickerSymbol
     * @param $date
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol, $date, array $params = []): array
    {
        return $this->_get($this->route . $tickerSymbol . '/' . $date, $params);
    }
}
