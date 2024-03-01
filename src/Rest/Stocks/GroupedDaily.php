<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class GroupedDaily
 *
 * @package PolygonIO\Rest\Stocks
 */
class GroupedDaily extends RestResource
{
    protected $route = '/v2/aggs/grouped/locale/us/market/stocks/';

    /**
     * @param $date
     * @param  string  $locale
     * @param  string  $market
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($date, $params = []): array
    {
        return $this->_get($this->route . $date, $params);
    }

}
