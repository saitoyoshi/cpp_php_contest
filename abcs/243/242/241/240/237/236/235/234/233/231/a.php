<?php

$N = (int) fgets(STDIN);
for ($i = 0; $i < $N; $i++) {
    $s = trim(fgets(STDIN));
    if (!isset($a[$s])) {
        $a[$s] = 1;
    } else {
        $a[$s]++;
    }
}
// var_dump($a);
$max = max($a);
$b = array_flip($a);
echo $b[$max] . PHP_EOL;
