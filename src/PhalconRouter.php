<?php
declare(strict_types=1);

namespace Phlexus\PhalconRouter;

use Phlexus\PhalconRouter\Adapters\AdapterInterface;
use RouterFiller;

class PhalconRouter
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * PhalconRouter constructor.
     *
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * Get current adapter object
     *
     * @return AdapterInterface
     */
    public function getAdapter(): AdapterInterface
    {
        return $this->adapter;
    }

    /**
     * @param string $pattern
     * @param array $paths
     * @param array $httpMethods
     */
    public function addRoute(string $pattern, array $paths, $httpMethods = ['*']): void
    {
        $this->adapter->add($pattern, $paths, $httpMethods);
    }

    /**
     * Fill Phalcon Router
     */
    public function fillRouter(): void
    {
        $routes = $this->adapter->getRoutes();
        (new RouterFiller($routes))->fill();
    }
}
