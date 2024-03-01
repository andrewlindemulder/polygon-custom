<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotSingleTicker
 *
 * @package PolygonIO\Rest\Stocks
 */
class SnapshotSingleTicker extends RestResource
{
    protected $route = '/v2/snapshot/locale/us/markets/stocks/tickers/';

    /**
     * @param $tickerSymbol
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol): array
    {
        return $this->_get($this->route . $tickerSymbol);
    }

}
