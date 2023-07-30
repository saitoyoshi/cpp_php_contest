<?php

$N = (int) fgets(STDIN);
$a = range(1,$N);
while (count($a) !== 1) {
    for ($i = 0; $i <= $last; $i += 2) {
        unset($a[$i]);
    }
    $a = array_values($a);
}
echo $a[0] . PHP_EOL;
