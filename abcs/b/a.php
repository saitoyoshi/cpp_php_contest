<?php

$letters = range('A','Z');
// var_dump($letters);
$N = (int) trim(fgets(STDIN));
$s = str_split(trim(fgets(STDIN)));
foreach ($s as $v) {
    $key = array_search($v,$letters);
    // echo ($key+$N) . ' ';
    echo $letters[($key+$N)%26];
}
echo PHP_EOL;
