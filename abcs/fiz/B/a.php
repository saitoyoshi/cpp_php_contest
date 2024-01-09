<?php

$N = (int) trim(fgets(STDIN));
$s = trim(fgets(STDIN));
$k = (int) trim(fgets(STDIN));
$ch = $s[$k-1];
for ($i = 0; $i < $N; $i++) {
    if ($s[$i] === $ch) {
        echo $s[$i];
    } else {
        echo '*';
    }
}
echo PHP_EOL;
