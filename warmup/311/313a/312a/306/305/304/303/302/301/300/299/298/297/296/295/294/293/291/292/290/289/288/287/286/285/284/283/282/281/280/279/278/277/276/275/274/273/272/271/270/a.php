<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = hassolved($A);
$b = hassolved($B);
$r = array_sum(array_unique(array_merge($a,$b)));
echo $r . PHP_EOL;
function hassolved($score) {
    if ($score === 0) {
        return [0];
    }
    elseif ($score === 1) {
        return [1];
    } elseif ($score === 2) {
        return [2];
    } elseif ($score === 3) {
        return [1,2];
    } elseif ($score === 4) {
        return [4];
    } elseif ($score === 5) {
        return [1,4];
    } elseif ($score === 6) {
        return [2,4];
    } elseif ($score === 7) {
        return [1,2,4];
    } else {
        return 'error';
    }
}
