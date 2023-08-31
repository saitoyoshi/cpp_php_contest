<?php

$string = trim(fgets(STDIN));
$len = strlen($string);
if ($len === 3) {
    echo str_repeat($string, 2) . PHP_EOL;;
} elseif ($len === 2) {
    echo str_repeat($string, 3). PHP_EOL;;
} elseif ($len === 1) {
    echo str_repeat($string, 6). PHP_EOL;;

}
