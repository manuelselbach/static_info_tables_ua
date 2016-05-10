<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (ua)',
    'description' => '(Ukrainian) language pack for the Static Info Tables providing localized names for countries, 
                       currencies and so on.',
    'category' => 'misc',
    'version' => '6.3.1',
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
                    'typo3' => '7.6.0-7.6.99',
                    'php' => '5.5.0-0.0.0',
                    'static_info_tables' => '6.3.0-6.3.99',
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
];
