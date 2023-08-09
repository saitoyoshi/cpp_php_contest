<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));

$APos = strpos($string, 'A');
$BPos = strpos($string, 'B');
$CPos = strpos($string, 'C');
$max = max($APos,$BPos,$CPos);
echo ($max+1). PHP_EOL;
