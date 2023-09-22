<?php

$N = (int) fgets(STDIN);
$s = trim(fgets(STDIN));
for ($i = 1; $i <= $N; $i++) {
    if ($s[$i-1] === '1') {
        if ($i % 2 === 0) {
            // はじめは奇数から 奇数のときは、Tのターン
            echo 'Aoki' . PHP_EOL;
            exit;
        } else {
            echo 'Takahashi' . PHP_EOL;
            exit;
        }
    }
}
