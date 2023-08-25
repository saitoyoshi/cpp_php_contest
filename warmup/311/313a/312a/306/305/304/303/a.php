<?php

$N = (int) fgets(STDIN);
$S = trim(fgets(STDIN));
$T = trim(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    if ($S[$i] === $T[$i] || $S[$i] === 'l' && $T[$i] === '1' || $S[$i] === '1' && $T[$i] === 'l' || $S[$i] === '0' && $T[$i] === 'o' || $S[$i] === 'o' || $T[$i] === '0') {
        ;
    } else {
        echo 'No' . PHP_EOL;
        exit;
    }
}
echo 'Yes' . PHP_EOL;
