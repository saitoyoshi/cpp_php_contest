<?php

$S = trim(fgets(STDIN));
$arr = str_split($S);
$arr = array_unique($arr);
echo count($arr) . PHP_EOL;
// $types = [];
// for ($i = 0, $len = strlen($S); $i < $len; $i++) {
//     $types[$S[$i]]++;
// }
