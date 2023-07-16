<?php

$N = (int) fgets(STDIN);
$arrA = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$arrB = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));

$result = 0.0;
foreach ($arrA as $a) {
    $result += 1.0 / 3.0 * $a;
}
foreach ($arrB as $b) {
    $result += 2.0 / 3.0 * $b;
}
printf("%.12lf\n", $result);
