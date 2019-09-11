<?php
declare(strict_types=1);

namespace Phlexus\PhalconRouter;

use Phlexus\PhalconRouter\Adapters\AdapterInterface;

class PhalconRouter
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * PhalconRouter constructor.
     *
     * @param string $adapter
     * @param array $routes
     */
    public function __construct(string $adapter, array $routes = [])
    {
        $this->adapter = $adapter;
    }

    public function addRoute()
    {

    }

    public function fillRouter()
    {

    }
}
