<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
rsort($arr);
$max = array_shift($arr);
$filtered = array_filter($arr,fn($v) => $v !== $max);
// var_dump($filtered);
$r = array_shift($filtered);
echo $r . PHP_EOL;
