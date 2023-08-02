<?php

$S = 15;
$arr = range(1,6);
$N = count($arr);

$cnt = 0;
for ($i = 0; $i < (1 << $N); $i++) {
    $sum = 0;
    $combination = [];
    for ($j = 0; $j < $N; $j++) {
        if ($i & (1 << $j)) {
            $sum += $arr[$j];
            $combination[] = $arr[$j];
        }
    }
    if ($S === $sum) {
        $cnt++;
        print_r($combination);
    }
}
echo $cnt .PHP_EOL;
