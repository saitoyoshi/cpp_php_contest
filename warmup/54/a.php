<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$rank = range(2,13);
array_push($rank,1);
$aRank = array_keys($rank,$a);
$bRank = array_keys($rank,$b);

if ($aRank > $bRank) {
    echo 'Alice';
} elseif ($aRank < $bRank) {
    echo 'Bob';
} else {
    echo 'Draw';
}
echo PHP_EOL;
