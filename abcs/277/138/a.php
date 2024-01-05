<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
// var_dump($arr);
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    $sum += 1 / $arr[$i];
}
// var_dump(1 / $sum);
echo (1/$sum) . PHP_EOL;
