<?php

$N = (int) trim(fgets(STDIN));
$s = trim(fgets(STDIN));

$flag = false;
for ($i = 0; $i < $N; $i++) {
    if ($s[$i] === ',' && !$flag) {
        echo '.';
    } else {
        echo $s[$i];
    }
    if ($s[$i] === '"') {
        $flag = !$flag;
    }
}
echo PHP_EOL;
