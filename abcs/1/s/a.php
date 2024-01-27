<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$r = 0;
for ($i = 0; $i < $N-1; $i++) {
    if ($arr[$i] > $arr[$i+1]) {
        $r += ($arr[$i]-$arr[$i+1]);
        $arr[$i+1] = $arr[$i];
    }
}
echo $r . PHP_EOL;
