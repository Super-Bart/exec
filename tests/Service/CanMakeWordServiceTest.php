<?php

namespace Service;

use App\Service\CanMakeWordService;
use PHPUnit\Framework\TestCase;

require 'Service/CanMakeWordService.php';

class CanMakeWordServiceTest extends TestCase
{
    public function testCanMakeWord()
    {
        $service = new CanMakeWordService();

        $testCases = [
            ['a', 'abc', true],
            ['abc', 'aabbcc', true],
            ['hello', 'world', false],
            ['aaa', 'aaabbb', true],
        ];

        foreach ($testCases as $testCase) {
            [$ransomNote, $magazine, $expectedResult] = $testCase;

            $result = $service->canMakeWord($ransomNote, $magazine);

            $this->assertEquals($expectedResult, $result);
        }
    }
}