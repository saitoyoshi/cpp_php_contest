<?php

$string = trim(fgets(STDIN));
$pattern = '/[A-Z]/';

if (preg_match($pattern,$string,$match, PREG_OFFSET_CAPTURE)) {
    echo $match[0][1] + 1 . PHP_EOL;
}
