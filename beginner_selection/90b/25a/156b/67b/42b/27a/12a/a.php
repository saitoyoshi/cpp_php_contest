<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

rsort($arr);
$teams = array_chunk($arr,2);
// var_dump($teams);
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    $sum += $teams[$i][1];
}
// for ($i = 1; $i < $N * 3 - 9; $i += 2) {
//     $sum += $arr[$i];
// }
echo $sum . PHP_EOL;
