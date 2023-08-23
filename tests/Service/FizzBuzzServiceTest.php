<?php

namespace Service;

use App\Service\FizzBuzzService;
use PHPUnit\Framework\TestCase;

require 'Service/FizzBuzzService.php';

class FizzBuzzServiceTest extends TestCase
{
    public function testFizzBuzz()
    {
        $service = new FizzBuzzService();

        $testCases = [
            [1, [1]],
            [3, [1, 2, 'Fizz']],
            [5, [1, 2, 'Fizz', 4, 'Buzz']],
            [15, [1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz']],
        ];

        foreach ($testCases as [$input, $expectedResult]) {
            $result = $service->fizzBuzz($input);

            $this->assertEquals($expectedResult, $result);
        }
    }
}