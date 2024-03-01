<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class StockFinancials
 *
 * @package PolygonIO\Rest\Reference
 */
class StockFinancials extends RestResource
{
    protected $route = '/vX/reference/financials';

    protected $defaultParams = [
        'limit' => 5,
     ];

    /**
     * @param  $params
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
