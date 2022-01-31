<?php


return [
    'employes' => [
        'base_uri' => env('EMPLOYES_SERVICE_BASE_URI'),
        'secret' => env('EMPLOYES_SERVICE_SECRET')
    ],
    'conges' => [
        'base_uri' => env('CONGES_SERVICE_BASE_URI'),
        'secret' => env('CONGES_SERVICE_SECRET'),
    ],
    'pointages' => [
        'base_uri' => env('POINTAGES_SERVICE_BASE_URI'),
        'secret' => env('POINTAGES_SERVICE_SECRET'),
    ],
    'prets' => [
        'base_uri' => env('PRETS_SERVICE_BASE_URI'),
        'secret' => env('PRETS_SERVICE_SECRET'),
    ],
    'missions' => [
        'base_uri' => env('MISSIONS_SERVICE_BASE_URI'),
        'secret' => env('MISSIONS_SERVICE_SECRET'),
    ],
    'salaires' => [
        'base_uri' => env('SALAIRES_SERVICE_BASE_URI'),
        'secret' => env('SALAIRES_SERVICE_SECRET'),
    ]
];