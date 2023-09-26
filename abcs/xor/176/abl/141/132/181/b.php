<?php

$N = (int) trim(fgets(STDIN));
$r = 0;
for ($i = 0; $i < $N; $i++) {
    [$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $r += $b * ($b+1) / 2 - ($a-1) * $a / 2;
}
echo $r . PHP_EOL;
