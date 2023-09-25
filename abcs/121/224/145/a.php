<?php

$N = (int) trim(fgets(STDIN));
$s = trim(fgets(STDIN));
$half = $N/2;
$t1 = substr($s,0,$half);
$t2 = substr($s,$half);
echo $t1 === $t2 ? 'Yes' : 'No';
echo PHP_EOL;
