<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
$bucket = array_fill(0,max($arr)+1, 0);
foreach ($arr as $v) {
    $bucket[$v]++;
}
for ($i = 0; $i < $Q; $i++) {
    $x = (int) fgets(STDIN);
    echo $bucket[$x] . PHP_EOL;
}
