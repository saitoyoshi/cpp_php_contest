<?php

[$x,$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

if ($b-$a <= 0) {
    echo 'delicious';
} elseif ($b-$a <= $x) {
    echo 'safe';
} else {
    echo 'dangerous';
}
echo PHP_EOL;
