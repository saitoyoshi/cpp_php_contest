<?php

$string = trim(fgets(STDIN));
$letters = str_split($string);
$letters = array_reverse($letters);
$index = array_search('a', $letters);
if ($index === false) {
    echo -1 . PHP_EOL;
} else {
    echo count($letters) - $index . PHP_EOL;
}
