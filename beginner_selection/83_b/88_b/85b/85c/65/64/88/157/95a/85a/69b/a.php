<?php

$string = trim(fgets(STDIN));
$len = strlen($string);
echo $string[0] . ($len - 2) . $string[-1] . PHP_EOL;
