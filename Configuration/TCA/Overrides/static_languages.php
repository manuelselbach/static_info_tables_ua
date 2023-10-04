<?php

$initialize = function ($dataSetName) {
    $additionalFields = [
        'lg_name_en' => 'lg_name_ua'
    ];

    \Mselbach\StaticInfoTablesUa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_languages');
unset($initialize);
