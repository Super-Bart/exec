<?php

$command = $argv[1] ?? null;

if ($command === null) {
    echo "Usage: php app.php <command> <args>\n";
    exit(1);
}

switch ($command) {
    case 'fizzbuzz':
        include 'Command/FizzBuzzCommand.php';
        break;
    case 'canmakeword':
        include 'Command/CanMakeWordCommand.php';
        break;
    case 'mostcivilrows':
        include 'Command/MostCivilRowsCommand.php';
        break;
    default:
        echo "Unknown command. Available Command: fizzbuzz, canmakeword, mostcivilrows\n";
}