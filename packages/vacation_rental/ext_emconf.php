<?php

/**
 * Extension Manager/Repository config file for ext "vacation_rental".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Vacation Rental',
    'description' => 'Sitepackage Perkeo Apartments',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gowords\\VacationRental\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mariana España',
    'author_email' => 'marianaespana@yahoo.es',
    'author_company' => 'goWords',
    'version' => '1.0.0',
];
