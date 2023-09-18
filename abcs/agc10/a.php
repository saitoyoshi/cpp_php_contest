<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = array_sum($arr);
if ($sum % 2 === 0) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;
