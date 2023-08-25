<?php

function gcd(int $x, int $y): int {
    if ($y === 0) return $x;
    return gcd($y, $x % $y);
}
function lcm(int $x, int $y) {
    return $x / gcd($x, $y) * $y;
}
$N = (int) fgets(STDIN);
$arr = array_map(fn($v) => (int)$v, explode(" ", trim(fgets(STDIN))));

$result = $arr[0];
for ($i = 1; $i < $N; $i++) {
    $result = lcm($result,$arr[$i]);
}
echo $result . PHP_EOL;
