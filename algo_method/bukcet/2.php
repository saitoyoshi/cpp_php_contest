<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$bucket = array_fill(1, max($arr), 0);
// var_dump($bucket);
foreach ($arr as $v) {
    $bucket[$v]++;
}
$max = max($bucket);
$result = array_search($max,$bucket);
echo $result . PHP_EOL;
