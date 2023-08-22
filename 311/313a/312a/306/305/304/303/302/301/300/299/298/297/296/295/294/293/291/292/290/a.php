<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = 0;
foreach ($B as $key) {
    $sum += $A[$key-1];
}
echo $sum . PHP_EOL;
