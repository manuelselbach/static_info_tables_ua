<?php
defined('TYPO3_MODE') or die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cu_name_en' => 'cu_name_ua',
        'cu_sub_name_en' => 'cu_sub_name_ua'
    ];

    \Mselbach\StaticInfoTablesUa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_currencies');
unset($initialize);
