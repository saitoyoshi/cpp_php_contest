<?php

$N = (int) trim(fgets(STDIN));
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = trim(fgets(STDIN));
}
echo count(array_unique($s)) . PHP_EOL;
