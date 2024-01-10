<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
rsort($arr);
$longest = $arr[0];
$sum = 0;
for ($i = 1; $i < $N; $i++) {
    $sum += $arr[$i];
}
if ($sum > $longest) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
