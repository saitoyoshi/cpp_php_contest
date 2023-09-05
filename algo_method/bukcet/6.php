<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = array_fill(0,100001,0);
for ($i = 0; $i < $N; $i++) {
    $cnt[$arr[$i]]++;
}
// var_dump($cnt);
$U = $N * ($N-1) / 2;
$A = 0;

for ($i = 0; $i <= 100000; $i++) {
    $v = $cnt[$i];
    $A += $v * ($v - 1) / 2;
}
echo $A / $U . PHP_EOL;
