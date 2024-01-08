<?php

$N = (int) trim(fgets(STDIN));
$arr = explode(" ", trim(fgets(STDIN)));
// var_dump($arr);
$len = strlen($arr[0]);
for ($i = 0; $i < $len; $i++) {
    echo $arr[0][$i];
    echo $arr[1][$i];
}
echo PHP_EOL;
