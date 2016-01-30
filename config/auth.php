<?php

return [

    'multi' => [
        'volunteer' => [
            'driver' => 'eloquent',
            'model'  => App\Volunteer::class,
            'table'  => 'users'
        ],
        'admin' => [
            'driver' => 'eloquent',
            'model'  => App\Admin::class,
            'table'  => 'admins'
        ]
    ],

];
