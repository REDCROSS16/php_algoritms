<?php


class InsertionSort 
{
    public static function sort(array $array, $reverse = false): array
    {
        for ($i = 1; $i < count($array); $i++ ) {
            $temp = $array[$i];
            for ($j = $i; $j > 0 && $temp > $array[$j - 1]; $j--) {
                $array[$j] = $array[$j - 1];
            }
            $array[$j] = $temp;
        }

        if ($reverse) return array_reverse($array);

        return $array;
    }
}

print_r(InsertionSort::sort([5,4,22,50,1]));
print_r(InsertionSort::sort([5,4,22,50,1], true));

