<?php

namespace Service;

use App\Service\MostCivilRowsService;
use PHPUnit\Framework\TestCase;

require 'Service/MostCivilRowsService.php';

class MostCivilRowsServiceTest extends TestCase
{
    public function testMostCivilRowsInRangeOfK()
    {
        $service = new MostCivilRowsService();

        $testCases = [
            [
                [
                    [1, 1, 0, 0, 0],
                    [1, 1, 1, 1, 0],
                    [1, 0, 0, 0, 0],
                    [1, 1, 0, 0, 0],
                    [1, 1, 1, 1, 1]
                ],
                3,
                [2, 0, 3]
            ],
            [
                [
                    [1, 0, 0, 0, 0],
                    [1, 1, 1, 1, 0],
                    [1, 1, 0, 0, 0],
                    [1, 1, 1, 0, 0],
                    [1, 0, 0, 0, 0]
                ],
                2,
                [0, 4]
            ],
            [
                [
                    [0, 0, 0, 0],
                    [1, 1, 1, 1],
                    [1, 0, 0, 0],
                    [1, 0, 1, 0],
                ],
                3,
                [0, 2, 3]
            ],
            [
                [
                    [1, 0],
                    [0, 0],
                ],
                1,
                [1]
            ],
        ];

        foreach ($testCases as [$matrix, $k, $expectedResult]) {
            $result = $service->mostCivilRowsInRangeOfK($matrix, $k);

            $this->assertEquals($expectedResult, $result);
        }
    }
}