<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class Aggregates
 *
 * @package PolygonIO\Rest\Stocks
 */
class Aggregates extends RestResource
{
    protected $route = '/v2/aggs/ticker/';

    /**
     * @param $tickerSymbol
     * @param $multiplier
     * @param $from
     * @param $to
     * @param  string  $timespan
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol, $multiplier, $from, $to, $timespan = 'days', $params = []): array
    {
        return $this->_get($this->route . $tickerSymbol . '/range/' . $multiplier . '/' . $timespan . '/' . $from . '/' . $to, $params);
    }

}
