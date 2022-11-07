<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrador' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'alumno' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'docente' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'vigilante' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
