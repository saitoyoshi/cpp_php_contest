<?php

$N = (int) trim(fgets(STDIN));
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    [$l,$r] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    // var_dump($l);
    // var_dump($r);
    $sum += ($r-$l+1);
}
echo $sum . PHP_EOL;
