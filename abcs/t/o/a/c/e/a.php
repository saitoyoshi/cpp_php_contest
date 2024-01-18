<?php

$N = (int) trim(fgets(STDIN));
$s = trim(fgets(STDIN));
if ($N % 2 !== 0) {
    echo 'No' . PHP_EOL;exit;
}
$sub = substr($s,0,$N/2);
// echo $sub . PHP_EOL;
if (str_repeat($sub,2) === $s) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;

}
