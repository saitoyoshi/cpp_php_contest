<?php

$N = (int) fgets(STDIN);
[$T,$A] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$H = array_map('intval',explode(" ", trim(fgets(STDIN))));
$diff = abs(-60 - 0.006 * 100000);
$result = 0;
for ($i = 0; $i < $N; $i++) {
    $t = abs($A - ($T - (float)($H[$i] * 0.006)));
    if ($diff > $t) {
        $diff = $t;
        $result = $i + 1;
    }
}
echo $result . PHP_EOL;
