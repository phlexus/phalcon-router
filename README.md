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
    '/admin/users/my-profile' => [
        'methods' => '*',
        'paths' => [
            'controller' => 'users',
            'action'     => 'profile',
        ],
    ],
];
```
