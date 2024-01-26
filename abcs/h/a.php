<?php

$N = (int) trim(fgets(STDIN));
$arr = explode(" ", trim(fgets(STDIN)));
// var_dump($arr)
if (in_array('Y',$arr)) {
    echo 'Four' . PHP_EOL;
} else {
    echo 'Three' . PHP_EOL;
}
