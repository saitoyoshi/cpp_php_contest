<?php

$string = trim(fgets(STDIN));
$a = str_split($string);
$range = range('0', '9');
// var_dump($range);
foreach ($range as $v) {
    if (!in_array($v, $a)) {
        echo $v . PHP_EOL;
    }
}
