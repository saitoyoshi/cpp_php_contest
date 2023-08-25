<?php

$N = (int) fgets(STDIN);
$arr = array_map(function ($v) {
return (int) $v;
}, explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        for ($k = $j+1; $k < $N; $k++) {
            for ($l = $k + 1; $l < $N; $l++) {
                for ($m = $l + 1; $m < $N; $m++) {
                    if ($arr[$i] + $arr[$j] + $arr[$k] + $arr[$l] + $arr[$m] === 1000) $cnt++;
                }
            }
        }
    }
}
echo $cnt . PHP_EOL;
