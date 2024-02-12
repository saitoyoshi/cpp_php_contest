<?php

$s = str_split(trim(fgets(STDIN)));
$a = array_count_values($s);
ksort($a);
foreach ($a as $k => $v) {
    if ($v === max($a)) {
        echo $k . PHP_EOL;exit;
    }
}
// var_dump($a);
