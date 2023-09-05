<?php

$N = (int) fgets(STDIN);
$min_value = -2147483648; // -2^31
$max_value = 2147483647;  // 2^31 - 1

if ($N >= $min_value && $N < $max_value) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
