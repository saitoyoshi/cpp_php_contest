<?php

[$N,$M,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $M; $j++) {
        if (($A[$i] + $B[$j]) === $K) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
