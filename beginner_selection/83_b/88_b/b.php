<?php

$scores = [0,0];
$N = (int) fgets(STDIN);
$cards = array_map('intval',explode(" ", trim(fgets(STDIN))));
rsort($cards);
for ($i = 0; $i < $N; $i++) {
    $scores[$i % 2] += $cards[$i];
}
echo ($scores[0] - $scores[1]) . PHP_EOL;
