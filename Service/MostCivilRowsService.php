<?php

declare(strict_types=1);

namespace App\Service;

class MostCivilRowsService
{
    public function mostCivilRowsInRangeOfK(array $matrix, int $k): array
    {
        $strenghtOfAllRows = [];

        for ($i = 0; $i < count($matrix); $i++) {
            $strenghtOfSoldiersInRow= 0;

            foreach ($matrix[$i] as $peopleInRow) {
                if ($peopleInRow === 0)
                {
                    break;
                }
                $strenghtOfSoldiersInRow+= $peopleInRow;
            }

            $strenghtOfAllRows[] = [$strenghtOfSoldiersInRow, $i];
        }

        usort($strenghtOfAllRows, function($a, $b) {
            return $a[0] - $b[0];
        });

        $result = [];
        for ($i = 0; $i < $k; $i++) {
            $result[] = $strenghtOfAllRows[$i][1];
        }

        return $result;
    }
}
