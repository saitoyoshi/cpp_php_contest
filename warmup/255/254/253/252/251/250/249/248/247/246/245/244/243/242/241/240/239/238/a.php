<?php

$n = (int) fgets(STDIN);
$left = 2 ** $n;
$right = $n ** 2;
if ($left > $right) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
