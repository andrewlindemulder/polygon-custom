<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class Markets
 *
 * @package PolygonIO\rest\reference
 */
class Markets extends RestResource
{
    protected $route = '/v3/reference/exchanges';

    /**
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
