<?php

$string = trim(fgets(STDIN));
$arr = str_split($string);
$arr2 = array_count_values($arr);
foreach ($arr2 as $key => $v) {
    if ($v === 1) {
        echo $key . PHP_EOL;
        exit;
    }
}
echo -1 . PHP_EOL;
