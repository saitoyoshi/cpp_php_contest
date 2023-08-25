<?php

$N = (int) fgets(STDIN);
$P = array_map('intval',explode(" ", trim(fgets(STDIN))));

$p1 = array_shift($P);
$max = max($P);
if ($p1 < $max) {
    echo ($max - $p1 + 1) . PHP_EOL;
} elseif ($p1 > $max) {
    echo 0 . PHP_EOL;
} else {
    echo 1 . PHP_EOL;
}
