<?php

$s = trim(fgets(STDIN));
if ($s === 'Friday') {
    echo 1 . PHP_EOL;
} elseif ($s === 'Thursday') {
    echo 2 . PHP_EOL;
} elseif ($s === 'Wednesday') {
    echo 3 . PHP_EOL;
} elseif ($s === 'Tuesday') {
    echo 4 . PHP_EOL;
} elseif ($s === 'Monday') {
    echo 5 . PHP_EOL;
}
