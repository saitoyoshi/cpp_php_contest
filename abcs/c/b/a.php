<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
arsort($arr);
// var_dump($arr);
$indexes = array_keys($arr);
echo ($indexes[1]+1) . PHP_EOL;
