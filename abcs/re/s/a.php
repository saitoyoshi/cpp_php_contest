<?php

$N = (int) trim(fgets(STDIN));
$a = [];
for ($i = 0; $i < $N; $i++) {
    [$s,$t] = explode(" ", trim(fgets(STDIN)));
    $a[] = $s. ' ' . $t;
}
$b = array_unique($a);
// var_dump($b);exit;
if (count($a) === count($b)) {
    echo 'No' . PHP_EOL;
} else {
    echo 'Yes' . PHP_EOL;
}
