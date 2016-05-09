<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$tempTablesDef = [
    'static_countries' => [
        'cn_short_en' => 'cn_short_ua',
    ],
    'static_country_zones' => [
        'zn_name_en' => 'zn_name_ua',
    ],
    'static_currencies' => [
        'cu_name_en' => 'cu_name_ua',
        'cu_sub_name_en' => 'cu_sub_name_ua',
    ],
    'static_languages' => [
        'lg_name_en' => 'lg_name_ua',
    ],
    'static_territories' => [
        'tr_name_en' => 'tr_name_ua',
    ],
    'static_taxes' => [
        'tx_name_en' => 'tx_name_ua',
    ],
];

foreach ($tempTablesDef as $tempTable => $tempFieldDef) {
    t3lib_div::loadTCA($tempTable);
    foreach ($tempFieldDef as $tempSourceField => $tempDestField) {
        $tempColumns = [];
        $tempColumns[$tempDestField] = $TCA[$tempTable]['columns'][$tempSourceField];
        $tempColumns[$tempDestField]['label'] = 'LLL:EXT:' . $_EXTKEY . '/locallang_db.xml:' . $tempTable . '_item.' . $tempDestField;
        t3lib_extMgm::addTCAcolumns($tempTable, $tempColumns, 1);
        t3lib_extMgm::addToAllTCAtypes($tempTable, $tempDestField, '', 'after:' . $tempSourceField);
    }
}
