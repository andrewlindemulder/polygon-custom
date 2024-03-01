<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class ConditionMappings
 *
 * @package PolygonIO\Rest\Stocks
 */
class ConditionMappings extends RestResource
{
    protected $route = '/v3/reference/conditions';

    /**
     * @param  string  $tickTypes
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params = []): array
    {
        return $this->_get($this->route . $params);
    }
}
