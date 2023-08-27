<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$min = min($arr);
$max = max($arr);
echo $max - $min . PHP_EOL;
