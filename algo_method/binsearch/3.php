<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $M; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($B[$i] <= $A[$j]) {
            echo $j . PHP_EOL;
            break;
        }
    }
}
