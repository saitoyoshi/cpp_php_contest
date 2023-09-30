<?php

$x = (int) trim(fgets(STDIN));
if ($x < 0) {
    if ($x % 10 === 0) {
        echo intdiv($x,10) . PHP_EOL;
    } else {
        echo intdiv($x,10)-1 . PHP_EOL;
    }
} else {
    echo intdiv($x,10) . PHP_EOL;
}
