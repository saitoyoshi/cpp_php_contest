<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$odds = array_filter($arr,fn($v) => $v % 2 === 1);
if (count($odds) % 2 === 0) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;
