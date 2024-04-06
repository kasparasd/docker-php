<?php

function filter($n, $val1, $array)
{
    $result = [0, 0, 0];

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $val1) {
            $result[0]++;
        }
        if ($array[$i] == $val1) {
            $result[1]++;
        }
        if ($array[$i] > $val1) {
            $result[2]++;
        }
    }

    var_dump($result);
}

// filter(5, 6, [2, 4, 6, 8, 10]);

echo 123;
