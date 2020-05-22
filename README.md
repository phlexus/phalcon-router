# Phlexus Phalcon Router

Multi format wrapper for Phalcon Router.

Main purpose: make possible to manipulate routes in different formats and environments.

For example: array to object...

Transform this:
```php
$router->add('/admin/users/my-profile', [
    'controller' => 'users',
    'action'     => 'profile',
]);
```

To this:
```php
$routes = [
    '/admin/users/my-profile' => ['users', 'profile'],
];
```


## Basic usage

```php
$routes = [
    '/' => ['index', 'index'],

    '/advanced' => [
        'methods' => ['GET', 'POST'],
        'paths' => [
            'controller' => 'index',
            'action' => 'advanced',
            'namespace' => 'Your\Vendor\Controllers',
        ],
    ],

    'another-uri' => [
        'methods' => '*',
        'paths' => [
            'controller-name',
            'action-name',
            'Your\Vendor\Controllers',
        ],
    ]
];

$adapter = new \Phlexus\PhalconRouter\Adapters\ArrayAdapter();
$phalconRouter = new \Phlexus\PhalconRouter\PhalconRouter($adapter);
$phalconRouter->addRoutes($routes);
$phalconRouter->parseRoutes();
$phalconRouter->fillRouter();
```
