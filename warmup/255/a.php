<?php

[$R,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = [];
$A[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// var_dump($A);

echo $A[$R-1][$C-1] . PHP_EOL;
