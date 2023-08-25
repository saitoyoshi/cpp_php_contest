<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));

$apos = strpos($string,'A');
$bpos = strpos($string,'B');
$cpos = strpos($string,'C');

echo (max($apos,$bpos,$cpos) + 1). PHP_EOL;
