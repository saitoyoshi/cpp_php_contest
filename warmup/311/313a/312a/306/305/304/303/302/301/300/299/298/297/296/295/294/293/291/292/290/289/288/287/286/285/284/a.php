<?php

$N = (int) fgets(STDIN);
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = trim(fgets(STDIN));
}
$s = array_reverse($s);
for ($i = 0; $i < $N; $i++) {
    echo $s[$i] . PHP_EOL;
}
