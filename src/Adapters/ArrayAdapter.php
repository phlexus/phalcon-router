<?php
declare(strict_types=1);

namespace Phlexus\PhalconRouter\Adapters;

class ArrayAdapter implements AdapterInterface
{
    /**
     * @var array
     */
    protected $routes;

    /**
     * @param string $pattern
     * @param array $paths
     * @param array|string $httpMethods
     * @return void
     */
    public function add(string $pattern, array $paths, $httpMethods = ['*']): void
    {
        $this->routes[$pattern] = [
            'paths' => $paths,
            'methods' => $httpMethods,
        ];
    }

    /**
     * @param string $pattern
     * @return array|null
     */
    public function get(string $pattern)
    {
        return $this->routes[$pattern] ?? null;
    }

    /**
     * @param string $pattern
     * @return bool
     */
    public function has(string $pattern): bool
    {
        return isset($this->routes[$pattern]);
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}
