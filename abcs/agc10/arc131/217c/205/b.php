<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a < 0 && $c % 2 === 1) {
    $acFugou = '-';
} else {
    $acFugou = '+';

}
if ($b < 0 && $c % 2 === 1) {
    $bcFugou = '-';
} else {
    $bcFugou = '+';
}
if ($acFugou === '+' && $bcFugou === '-') {
    echo '>' . PHP_EOL;
} elseif ($acFugou === '-' && $bcFugou === '+') {
    echo '<' . PHP_EOL;
} elseif ($acFugou === '-' && $bcFugou === '-') {
    $absA = abs($a);
    $absB = abs($b);
    if ($absA > $absB) {
        echo '<' . PHP_EOL;
    } elseif ($absA < $absB) {
        echo '>' . PHP_EOL;
    } else {
        echo '=' . PHP_EOL;
    }
} else {
    $absA = abs($a);
    $absB = abs($b);
    if ($absA > $absB) {
        echo '>' . PHP_EOL;
    } elseif ($absA < $absB) {
        echo '<' . PHP_EOL;
    } else {
        echo '=' . PHP_EOL;
    }
}
