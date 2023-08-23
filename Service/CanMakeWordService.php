<?php

declare(strict_types=1);

namespace App\Service;

class CanMakeWordService
{
    public function canMakeWord(string $ransomNote, string $magazine): bool
    {
        $ransomNote = str_split($ransomNote);
        $magazine = str_split($magazine);

        $ransomNoteGrouped = array_count_values($ransomNote);
        $magazineGrouped = array_count_values($magazine);

        foreach ($ransomNoteGrouped as $key => $value) {
            if (!isset($magazineGrouped[$key]) || $magazineGrouped[$key] < $value) {
                return false;
            }
        }

        return true;
    }
}