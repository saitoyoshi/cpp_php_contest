<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$bucket = array_fill(0,5*100000+1,0);
for ($i = 0; $i < $N; $i++) {
    $bucket[$arr[$i]]++;
}
$memo = array_fill(1,5*100000+1, -1);


$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    $x = (int) fgets(STDIN);
    if ($memo[$x] !== -1) {
        echo $memo[$x] . PHP_EOL;
    } else {
        $ans = 0;
        for ($v = 0; $v <= 500000; $v += $x) {
            $ans += $bucket[$v];
        }
        $memo[$x] = $ans;
        echo $ans . PHP_EOL;
    }
}
