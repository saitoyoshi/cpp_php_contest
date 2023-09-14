<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = [];
for ($i = 0; $i < $H; $i++) {
    $A[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$B = [];
for ($i = 0; $i < $W; $i++) {
    for ($j = 0; $j < $H; $j++) {
        $B[$i][] = $A[$j][$i];
    }
}
foreach ($B as $a) {
    echo implode(" ", $a) . PHP_EOL;
}
