<?php

$seq = array_map('intval',explode(" ", trim(fgets(STDIN))));

if (isIncrease($seq) && is100More675Less($seq) && is25Times($seq)) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}

function isIncrease($seq) {
    for ($i = 0; $i < 7; $i++) {
        if ($seq[$i] > $seq[$i+1]) {
            return false;
        }
    }
    return true;
}
function is100More675Less($seq) {
    foreach ($seq as $v) {
        if (!(100 <= $v && $v <= 675)) {
            return false;
        }
    }
    return true;
}
function is25Times($seq) {
    foreach ($seq as $v) {
        if ($v % 25 !== 0) {
            return false;
        }
    }
    return true;
}
