<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));

if ($A < $C) {
    echo 'Takahashi' . PHP_EOL;
} elseif ($A > $C) {
    echo 'Aoki' . PHP_EOL;
} else {
    if ($B <= $D) {
        echo 'Takahashi' . PHP_EOL;
    } else {
        echo 'Aoki' . PHP_EOL;
    }
}
