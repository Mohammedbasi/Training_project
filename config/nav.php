<?php


return [
    [
        'icon' => 'nav-icon fas fa-tachometer-alt',
        'route' => 'dashboard',
        'title' => 'Dashboard',
        'active' => 'dashboard',
        'user'=>true,
    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'user.index',
        'title' => 'Users',
        'active' => 'user.index',
        'user'=>false,
    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'user.create',
        'title' => 'Create',
        'active' => 'user.create',
        'user'=>false,
    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'user.trash',
        'title' => 'Trash',
        'active' => 'user.trash',
        'badge' => 'New',
        'user'=>false,
    ],
    [
        'icon' => 'nav-icon fas fa-tachometer-alt',
        'route' => 'vendors.index',
        'title' => 'Vendors',
        'active' => 'vendors.index',
        'user'=>false,
    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'vendors.create',
        'title' => 'Create Vendor',
        'active' => 'vendors.create',
        'user'=>false,
    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'vendors.trash',
        'title' => 'Vendors Trash',
        'active' => 'vendors.trash',
        'user'=>false,
    ],
];
