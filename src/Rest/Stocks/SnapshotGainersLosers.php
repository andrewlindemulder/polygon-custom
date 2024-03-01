<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotGainersLosers
 *
 * @package PolygonIO\Rest\Stocks
 */
class SnapshotGainersLosers extends RestResource
{
    protected $route = '/v2/snapshot/locale/us/markets/stocks/';

    /**
     * @param  string  $direction
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($direction = 'gainers', array $params = []): array
    {
        return $this->_get($this->route . $direction, $params);
    }

}
