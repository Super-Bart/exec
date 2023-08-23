<?php

namespace App\Command;

use App\Service\FizzBuzzService;

require 'Service/FizzBuzzService.php';

$service = new FizzBuzzService();
$input = isset($argv[2]) ? (int) $argv[2] : null;

if ($input === null) {
    echo "Usage: php app.php fizzbuzz <number>\n";
    exit(1);
}

$result = $service->fizzBuzz($input);
print_r($result);