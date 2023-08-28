<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$accs = [];
// $accs[0] = 0;
// $accs[1] = $arr[1];
// $accs[2] = $arr[1] + $arr[2]; $accs[2] = $accs[1] + $arr[2];
// $accs[i] = $accs[i-1] + $arr[i];
$accs[0] = 0;
for ($i = 1; $i <= $N; $i++) {
    $accs[$i] = $accs[$i-1] + $arr[$i-1];
}
// var_dump($accs);

$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    $k = (int) fgets(STDIN);
    echo $accs[$k] . PHP_EOL;
}
