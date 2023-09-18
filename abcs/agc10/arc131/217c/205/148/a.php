<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

function gcd($x,$y) {
    if ($y === 0) return $x;
    return gcd($y, $x % $y);
}
echo ($a * $b) / gcd($a,$b) . PHP_EOL;
