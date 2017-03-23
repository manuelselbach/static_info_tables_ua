<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (ua)',
    'description' => '(Ukrainian) language pack for the Static Info Tables providing localized names for countries, 
                       currencies and so on.',
    'category' => 'misc',
    'version' => '6.4.0',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'author_company' => '',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '7.6.0-8.99.99',
                    'php' => '5.6.0-0.0.0',
                    'static_info_tables' => '6.4.0-6.4.99',
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
];
