<?php

$N = (int) fgets(STDIN);
$one2nine = range(1,9);
$j_yaku = [];
foreach ($one2nine as $v) {
    if ($N % $v === 0) {
        $j_yaku[] = $v;
    }
}
$NdivJ = [];
foreach ($j_yaku as $v) {
    $NdivJ[$v] = $N / $v;
}
$s = [];
for ($i = 0; $i <= $N; $i++) {
    foreach ($NdivJ as $v) {
        if ($i % $v === 0) {
            $s[$i] = $N / $v;
            break;
        } else {
            $s[$i] = '-';
        }
    }
}
echo implode("", $s) . PHP_EOL;;
