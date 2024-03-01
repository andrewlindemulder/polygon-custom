<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotAllTickers
 *
 * @package PolygonIO\Rest\Stocks
 */
class SnapshotAllTickers extends RestResource
{
    protected $route = '/v2/snapshot/locale/us/markets/stocks/tickers';

    /**
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params = []): array
    {
        return $this->_get($this->route, $params);
    }

}
