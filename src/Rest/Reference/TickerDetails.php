<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class TickerDetails
 *
 * @package PolygonIO\rest\reference
 */
class TickerDetails extends RestResource
{
    protected $route = '/v3/reference/tickers/';

    /**
     * @param $tickerSymbol string
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $tickerSymbol, array $params = []): array
    {
        return $this->_get($this->route . $tickerSymbol, $params);
    }

}
