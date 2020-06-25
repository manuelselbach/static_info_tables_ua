<?php
declare(strict_types=1);

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameUa' => [
                'fieldName' => 'cn_short_ua',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameUa' => [
                'fieldName' => 'zn_name_ua',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameUa' => [
                'fieldName' => 'cu_name_ua',
            ],
            'subdivisionNameUa' => [
                'fieldName' => 'cu_sub_name_ua',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameUa' => [
                'fieldName' => 'lg_name_ua',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameUa' => [
                'fieldName' => 'tr_name_ua',
            ],
        ],
    ],
];
