<?php

class Fizzbuzz
{
    const MULTIPLE_OF_THREE = 3;
    const MULTIPLE_OF_FIVE = 5;

    public function convert($param)
    {
        $output = '';

        if (!is_int($param)) {
            throw new InvalidArgumentException('Argument must be an integer');
        }

        if ($param < 1) {
            throw new InvalidArgumentException('Argument must be positive');
        }

        if($this->isMultiple($param, self::MULTIPLE_OF_THREE)) {
            $output .= 'Fizz';
        }

        if($this->isMultiple($param, self::MULTIPLE_OF_FIVE)) {
            $output .= 'Buzz';
        }

        return $output ? $output : $param ;
    }

    private function isMultiple($param, $num): bool
    {
        return !($param % $num);
    }
}
