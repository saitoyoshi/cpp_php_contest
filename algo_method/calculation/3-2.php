<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$min = min($arr);
echo array_sum($arr) - $min . PHP_EOL;
