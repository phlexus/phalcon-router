<?php
declare(strict_types=1);

namespace Phlexus\PhalconRouter\Adapters;

interface AdapterInterface
{
    /**
     * @param string $pattern
     * @param array $paths
     * @param array|string $httpMethods
     * @return AdapterInterface
     */
    public function add(string $pattern, array $paths, $httpMethods = ['*']);
}
