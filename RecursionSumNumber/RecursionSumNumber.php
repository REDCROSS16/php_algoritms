<?php

class RecursionSumNumber
{
    public static function sum(int $num): int
    {
        $digit = $num % 10;
        
        if ($num > 0) {
            return $digit + self::sum(($num - $digit) / 10);
        }
        
        return $digit;
    }
}

echo RecursionSumNumber::sum(123456789);
