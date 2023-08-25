<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));
$arr = str_split($string);
$good = array_search('o', $arr);
$bad = array_search('x', $arr);
// var_dump($good);
// var_dump($bad);
// exit;
if ($good !== false && $bad === false) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;

}
