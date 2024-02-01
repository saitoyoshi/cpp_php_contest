<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
$min = $arr[0];
$max = $arr[count($arr)-1];
echo $max-$min . PHP_EOL;
