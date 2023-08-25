<?php

$N = (int) fgets(STDIN);
$P = array_map('intval',explode(" ", trim(fgets(STDIN))));
$player1 = $P[0];
$max = max($P);
$indexes = array_keys($P,$max);

if ($max === $player1 && count($indexes) === 1) {
    echo '0' . PHP_EOL;
} elseif ($max === $player1 && count($indexes) >= 2) {
    echo '1' . PHP_EOL;
} else {
    echo ($max - $player1 + 1) . PHP_EOL;
}
