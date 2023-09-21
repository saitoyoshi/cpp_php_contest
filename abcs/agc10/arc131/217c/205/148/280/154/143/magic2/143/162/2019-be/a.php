<?php

$N = (int) fgets(STDIN);
$s = trim(fgets(STDIN));
$k = (int) fgets(STDIN);
$letter = $s[$k-1];
for ($i = 0; $i < $N; $i++) {
    if ($s[$i] === $letter) {
        echo $s[$i];
    } else {
        echo '*';
    }
}
echo PHP_EOL;
