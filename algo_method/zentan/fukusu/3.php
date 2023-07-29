<?php

[$X,$Y,$Z] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$C = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($i = 0; $i < $X; $i++) {
    for ($j = 0; $j < $Y; $j++) {
        for ($k = 0; $k < $Z; $k++) {
            if (($A[$i] + $B[$j]) === $C[$k]) {
                $cnt++;
            }
        }
    }
}
echo $cnt . PHP_EOL;
