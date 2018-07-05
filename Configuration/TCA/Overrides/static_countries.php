<?php
defined('TYPO3_MODE') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_ua'
    ];

    \Mselbach\StaticInfoTablesUa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_countries');
unset($initialize);