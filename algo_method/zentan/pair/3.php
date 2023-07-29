<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        for ($k = $j+1; $k < $N; $k++) {
            if (max($A[$i],$A[$j],$A[$k]) === $A[$j]) {
                $cnt++;
            }
        }
    }
}
echo $cnt . PHP_EOL;
