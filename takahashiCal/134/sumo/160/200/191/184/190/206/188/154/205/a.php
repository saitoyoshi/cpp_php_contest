<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($A);
$seq = range(1,$N);
echo (($seq === $A) ? 'Yes' : 'No') . PHP_EOL;
