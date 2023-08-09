<?php

$N = (int) fgets(STDIN);
$cards = array_map('intval',explode(" ", trim(fgets(STDIN))));
$aliceScore = $bobScore = 0;
$turn = 1;
while (count($cards) !== 0) {
    $max = max($cards);
    $index = array_search($max,$cards);
    if ($index !== false) {
        unset($cards[$index]);
    }
    $turn = 1 - $turn;
    if ($turn === 0) {
        $aliceScore += $max;
    } else {
        $bobScore += $max;
    }
}
echo ($aliceScore - $bobScore) . PHP_EOL;
