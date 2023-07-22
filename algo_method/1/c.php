<?php

$X = (int) fgets(STDIN);
$arr = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$coins = [50,10,5,1];
$res = 0;
for ($i = 0; $i < 4; $i++) {
    $add = (int)($X / $coins[$i]);
    $add = min($add, $arr[$i]);
    $X -= $coins[$i] * $add;
    $res += $add;
    if ($X === 0) break;
}
echo $res . PHP_EOL;
