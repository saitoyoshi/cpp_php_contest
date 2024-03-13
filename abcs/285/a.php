<?php

$N = (int) trim(fgets(STDIN));
$s = str_split(trim(fgets(STDIN)));
for ($i = 1; $i < $N; $i++) {
    $l = 0;
    for ($j = 1; $j <= $N-$i; $j++) {
        if ($s[$j-1] === $s[$j-1+$i]) {
            break;
        }
        $l++;
    }
    echo $l . PHP_EOL;
}
