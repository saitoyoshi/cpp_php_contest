<?php

[$N,$S] = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));

$arr = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < (1 << $N); $i++) {
    $sum = 0;
    for ($j = 0; $j < $N; $j++) {
        if ($i & (1 << $j)) {
            $sum += $arr[$j];
        }
        if ($sum === $S) {
            echo 'Yes' . PHP_EOL;
            exit;
        }
    }
}
echo 'No' . PHP_EOL;
