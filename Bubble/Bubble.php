<?php


class Bubble 
{
    public static function sort(array $array): array
    {
        $size = sizeof($array) - 1;
        for ($i = $size; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i - 1); $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $k = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $k;
                }
            }
        }

        return $array;    
    }
}

print_r( Bubble::sort([5,6,10,21,33, 1,2,150,5,5,5]) );