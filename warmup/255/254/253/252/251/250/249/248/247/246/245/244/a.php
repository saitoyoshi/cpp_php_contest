<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));
echo $string[$N-1] . PHP_EOL;
