<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = [];
for ($i = 0; $i < $H; $i++) {
    $A[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
for ($i1 = 0; $i1 < $H; $i1++) {
    for ($i2 = $i1+1; $i2 < $H; $i2++) {
        for ($j1 = 0; $j1 < $W; $j1++) {
            for ($j2 = $j1+1; $j2 < $W; $j2++) {
                $left = $A[$i1][$j1] + $A[$i2][$j2];
                $right = $A[$i2][$j1] + $A[$i1][$j2];
                if ($left > $right) {
                    echo 'No' . PHP_EOL;
                    exit;
                }
            }
        }
    }
}
echo 'Yes' . PHP_EOL;
