<?php

namespace App\Command;

use App\Service\CanMakeWordService;

require 'Service/CanMakeWordService.php';

$service = new CanMakeWordService();

$ransomeNote = $argv[2] ?? null;
$magazine = $argv[3] ?? null;

if ($ransomeNote === null || $magazine === null) {
    echo "Usage: php app.php canmakeword <ransomeNote> <magazine>\n";
    exit(1);
}

$result = $service->canMakeWord($ransomeNote, $magazine);

if ($result) {
    echo "Can make the word.\n";
} else {
    echo "Cannot make the word.\n";
}