<?php

$N = (int) fgets(STDIN);
$arr = array_filter(array_map('intval',explode(" ", trim(fgets(STDIN)))), function ($v) {
    return $v % 2 === 0;
});;
echo implode(" ", $arr) . PHP_EOL;
