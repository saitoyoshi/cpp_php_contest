<?php


$N = (int) fgets(STDIN);
$arr = array_map(function ($v) {
    return (int)$v;
}, explode(" ", trim(fgets(STDIN))));
insertionSort($arr, $N);
function insertionSort(array $arr, int $N): void {
    echo implode(" ", $arr) . PHP_EOL;

    for ($i = 1; $i < $N; $i++) {
        $v = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $v) {
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $v;
        echo implode(" ", $arr) . PHP_EOL;
    }
}
