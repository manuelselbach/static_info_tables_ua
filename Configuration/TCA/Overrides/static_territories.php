<?php
defined('TYPO3_MODE') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'tr_name_en' => 'tr_name_ua'
    ];

    \Mselbach\StaticInfoTablesUa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_territories');
unset($initialize);
