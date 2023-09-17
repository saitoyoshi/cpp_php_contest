<?php

[$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));

if ($x % $y === 0) {
    echo -1 . PHP_EOL;
} else {
    echo $x . PHP_EOL;
}
