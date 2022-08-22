<?php

class QuickSort 
{
    public static function sort(array $array, int $low, int $high): ?array
    {
        if ($array || $low >= $high) {
            return null;
        }

        $middle = $low + ($high - $low) / 2;
        $opora = $array[$middle];

    }
}