<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i < $M; $i++) {
    $left = 0;
    $right = $N - 1;
    while ($right != $left) {
        $mid = (int)(($left + $right) / 2);
        if ($A[$mid] >= $B[$i]) {
            $right = $mid;
        } else {
            $left = $mid + 1;
        }
    }
    echo (int)$left . PHP_EOL;
}
