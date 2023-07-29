<?php

[$N, $K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        if (($A[$i] + $A[$j]) <= $K) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
