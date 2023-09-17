<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

if ($a === 1) {
    $a = 14;
}
if ($b === 1) {
    $b = 14;
}
if ($a > $b) {
    echo 'Alice';
} elseif ($a < $b) {
    echo 'Bob';
} else {
    echo 'Draw';
}
echo PHP_EOL;
