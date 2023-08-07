<?php

[$H, $W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $H; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$virticalSums = [];
for ($i = 0; $i < $H; $i++) {
    $cnt = 0;
    for ($j = 0; $j < $W; $j++) {
       if ( $strings[$i][$j] === "#") {
        $cnt++;
       }
    }
    $virticalSums[$i] = $cnt;
}
$horizontalSum = [];
for ($i = 0; $i < $W; $i++) {
    $cnt = 0;
    for ($j = 0; $j < $H; $j++) {
        if ( $strings[$j][$i] === "#") {
            $cnt++;
        }
    }
    $horizontalSum[$i] = $cnt;
}
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    [$p,$q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($strings[$p][$q] === "#") {
        $target = 1;
    } else {
        $target = 0;
    }
    $result = $virticalSums[$p] + $horizontalSum[$q] - $target;
    echo $result . PHP_EOL;
}
