<?php

function gcd(int $x, int $y): int {
    $result = 0;
    for ($i = 1; $i <= min($x,$y); $i++) {
        if ($x % $i === 0 && $y % $i === 0) {
            $result = $i;
        }
    }
    return $result;
}

[$A, $B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo gcd($A,$B) . PHP_EOL;
