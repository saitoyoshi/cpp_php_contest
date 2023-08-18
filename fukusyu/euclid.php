<?php

function gcd($x,$y) {
    if ($y === 0) return $x;
    return gcd($y, $x % $y);
}
echo gcd(506, 345) . PHP_EOL;
