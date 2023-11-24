<?php

/**
 * Extension Manager/Repository config file for ext "vacation_rental".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'vacation-rental',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
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
    'author' => 'Mariana Espana',
    'author_email' => 'marianaespana@yahoo.es',
    'author_company' => 'goWords',
    'version' => '1.0.0',
];
