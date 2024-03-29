<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class TickerNews
 *
 * @package PolygonIO\rest\reference
 * @deprecated
 */
class TickerNews extends RestResource
{
    protected $route = '/v2/reference/news';

    protected $defaultParams = [
        'perPage' => 50,
        'page' => 1,
    ];

    /**
     * @param $tickerSymbol
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params = []): array
    {
        return $this->_get($this->route, $params);
    }
}
