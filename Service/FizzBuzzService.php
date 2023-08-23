<?php

declare(strict_types=1);

namespace App\Service;

class FizzBuzzService
{
    public function fizzBuzz(int $input): array
    {
        $array = array();

        for ($i = 1; $i <= $input; $i++) {
            switch ($i) {
                case $i % 15 === 0: $array[] = 'FizzBuzz';
                    break;
                case $i % 3 === 0: $array[] = 'Fizz';
                    break;
                case $i % 5 === 0: $array[] = 'Buzz';
                    break;
                default: $array[] = $i;
            };
        }

        return $array;
    }
}