<?php

function gcd(int $x, int $y): int {
    if ($y == 0) return $x;
    return gcd($y, $x % $y);
}

$N = (int) fgets(STDIN);
$arr = array_map(fn($v) => (int)$v, explode(" ", trim(fgets(STDIN))));
$result = gcd($arr[0], $arr[1]);
for ($i = 2; $i < $N; $i++) {
    $result = gcd($result, $arr[$i]);
}
echo $result . PHP_EOL;
