<?php

namespace App\Command;

use App\Service\MostCivilRowsService;

require 'Service/MostCivilRowsService.php';

$service = new MostCivilRowsService();
$k = isset($argv[2]) ? (int) $argv[2] : null;

if ($k === null) {
    echo "Usage: php app.php mostcivilrows <k> <matrix>\n";
    exit(1);
}

$stringToConvert = $argv[3] ?? null;

$matrix = convertStringToMatrix($stringToConvert);

$result = $service->mostCivilRowsInRangeOfK($matrix, $k);

print_r($result);

function convertStringToMatrix($stringToConvert): array
{
    $rows = explode(";", $stringToConvert);

    $matrix = array();

    foreach ($rows as $row) {
        $columns = explode(",", $row);
        $matrixRow = array_map('intval', $columns);
        $matrix[] = $matrixRow;
    }

    return $matrix;
}
