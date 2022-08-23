<?php

class QuickSort 
{
    public static function sort(array $array, int $low, int $high): ?array
    {
        if ($array || $low >= $high) {
            return null;
        }
        # средняя точка
        $middle = $low + ($high - $low) / 2;
        # опорный элемент чтобы разбить массив на 2 части
        $opora = $array[$middle];
        $i = $low;
        $j = $high;
        echo 1;

        while ($i <= $j) {
            while ($array[$i] < $opora) {
                $i++;
            }
            while ($array[$j] > $opora) {
                $j--;
            }
        }

        if ($i <= $j) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            $i++;
            $j--;
        }

        if ($low < $j) {
            self::sort($array, $low, $j);
        }

        if ($high > $i) {
            self::sort($array, $high, $i);
        }

        return $array;

    }

    
}


$array = [100, 500, 50, 25, 1000, 205, 201, 222, 1];

print_r(QuickSort::sort($array, 0, count($array) - 1));