<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = array_sum($arr);
echo $sum ** 2 . PHP_EOL;
