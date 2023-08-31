<?php

[$A,$B,$C,$D,$E,$F,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$taka = solve($X,$A,$C,$B);
$aoki = solve($X,$D,$F,$E);
if ($taka > $aoki) {
    echo 'Takahashi' . PHP_EOL;
} elseif ($taka < $aoki) {
    echo 'Aoki' . PHP_EOL;
} else {
    echo 'Draw' . PHP_EOL;
}

function solve($X, $walkT, $restT, $perSecond) {
    $result = 0;
    while ($X > 0) {
        $walkTime = min($walkT, $X);
        $result += $walkTime * $perSecond;
        $X -= $walkTime;
        if ($X <= 0) {
            break;
        }
        $X -= $restT;
    }
    return $result;
}
