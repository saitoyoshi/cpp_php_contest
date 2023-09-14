<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$bucket = [];
foreach ($arr as $v) {
    if(!isset($bucket[$v])) {
        $bucket[$v] = 1;
    } else {
        $bucket[$v]++;
    }
}
$min = min($bucket);
$a = array_flip($bucket);
echo $a[$min] . PHP_EOL;
