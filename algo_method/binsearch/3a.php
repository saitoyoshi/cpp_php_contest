<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i < $M; $i++) {
    $result = binsearch($A,$B[$i], 0, $N - 1);
    echo $result . PHP_EOL;
}

function binsearch($arr,$target,$left,$right) {
    while ($right - $left >= 1) {
        $mid = ($left + $right) / 2.0;
        if ($arr[$mid] >= $target) {
            $right = $mid;
        } else {
            $left = $mid + 1;
        }
    }
    return $arr[$left] >= $target ? (int)$left : -1;
}
