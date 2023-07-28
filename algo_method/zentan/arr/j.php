<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$table = array_fill(1,9,0);
for ($i = 0; $i < $N; $i++) {
    $table[$arr[$i]]++;
}
// var_dump($table);
$maxCount = max($table);
for ($i = 1; $i <= count($table); $i++) {
    if ($table[$i] === $maxCount) {
        echo $i . PHP_EOL;
        exit;
    }
}
