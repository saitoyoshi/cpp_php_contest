<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = [];
for ($i = 0; $i < $H; $i++) {
    $A[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
for ($i = 0; $i < $H-1; $i++) {
    for ($j = 0; $j < $W-1; $j++) {
        $left = $A[$i][$j] + $A[$i+1][$j+1];
        $right = $A[$i+1][$j] + $A[$i][$j+1];
        if ($left > $right) {
            echo 'No' . PHP_EOL;
            exit;
        }
    }
}
echo 'Yes' . PHP_EOL;
