<?php

$N = (int) trim(fgets(STDIN));
$h = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = 1;
$scale = $h[0];
for ($i = 1; $i < $N; $i++) {
    if ($scale <= $h[$i]) {
        $sum++;
        $scale = $h[$i];
    }
}
echo $sum . PHP_EOL;
