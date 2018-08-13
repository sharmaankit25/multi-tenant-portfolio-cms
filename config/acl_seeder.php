<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'permissions' => 'c,r,u,d',
            'achievers' => 'c,r,u,d',
            'admissions' => 'c,r,u,d',
            'albums'    => 'c,r,u,d',
            'challans'=> 'c,r,u,d',
            'departments' => 'c,r,u,d',
            'documents' => 'c,r,u,d',
            'events'    =>  'c,r,u,d',
            'feedbacks' =>  'c,r,u,d',
            'feedback_responses'    =>  'c,r,u,d',
            'jobs'  =>  'c,r,u,d',
            'notices'   => 'c,r,u,d',
            'organisations' => 'c,r,u,d',
            'pages' => 'c,r,u,d',
            'photos'    =>  'c,r,u,d',
            'results'   =>  'c,r,u,d',
            'sliders'   =>  'c,r,u,d',
            'staffs'    =>  'c,r,u,d',
            'staff_types'   =>  'c,r,u,d',
            'standards' =>  'c,r,u,d',
        ],
        'administrator' => [
            'users' => 'r,u',
            'achievers' => 'c,r,u,d',
            'admissions' => 'c,r,u,d',
            'albums'    => 'c,r,u,d',
            'challans'=> 'c,r,u,d',
            'departments' => 'c,r,u,d',
            'documents' => 'c,r,u,d',
            'events'    =>  'c,r,u,d',
            'feedbacks' =>  'c,r,u,d',
            'feedback_responses'    =>  'c,r,u,d',
            'jobs'  =>  'c,r,u,d',
            'notices'   => 'c,r,u,d',
            'organisations' => 'r,u',
            'pages' => 'c,r,u,d',
            'photos'    =>  'c,r,u,d',
            'results'   =>  'c,r,u,d',
            'sliders'   =>  'c,r,u,d',
            'staffs'    =>  'c,r,u,d',
            'staff_types'   =>  'c,r,u,d',
            'standards' =>  'r',
        ]
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'view',
        'u' => 'update',
        'd' => 'delete'
    ]
];
