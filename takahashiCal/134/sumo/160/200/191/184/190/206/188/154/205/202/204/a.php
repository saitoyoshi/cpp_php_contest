<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    if ($A[$i] <= 10) {
        ;
    } else {
        $sum += ($A[$i] - 10);
    }
}
echo $sum . PHP_EOL;
