<?php

[$N,$S] = array_map(fn($v) => (int)$v, explode(" ", trim(fgets(STDIN))));
$numbers = array_map(fn($v) => (int)$v, explode(" ", trim(fgets(STDIN))));
// var_dump($numbers);
// ビット全探索
for ($i = 0; $i < (1 << $N); $i++) {
    $sum = 0;
    for ($j = 0; $j < $N; $j++) {
        if ($i & (1 << $j)) {
            // このとき、選ばれたとする
            $sum += $numbers[$j];
        }
    }
    if ($sum === $S) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
