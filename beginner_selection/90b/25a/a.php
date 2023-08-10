<?php

$N = (int) fgets(STDIN);
// わからんかった。
// 10のべき乗なら１０、そうでないなら各位の和
// 筆算から着想できるらしい
// 必ず繰り上がりが発生して、+9される。
$result = 0;
if (is10Power($N)) {
    echo "10" . PHP_EOL;
    exit;
} else {
    $number = $N;
    while ($number > 0) {
        $result += $number % 10;
        $number /= 10;
    }
    echo $result . PHP_EOL;
}


function is10Power($n) {
    $n = (string)$n;
    $len = strlen($n);
    if ($n[0] !== "1") {
        return false;
    }
    for ($i = 1; $i < $len; $i++) {
        if ($n[$i] !== "0") {
            return false;
        }
    }
    return true;
}
