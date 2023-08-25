<?php

$N = (int) fgets(STDIN);

if ($N % 5 === 0) {
    echo $N . PHP_EOL;
} elseif ($N % 5 <= 2) {
    echo $N - ($N % 5) . PHP_EOL;
} elseif ($N % 5 === 3) {
    echo $N + 2 . PHP_EOL;
} else {
    echo $N + 1 . PHP_EOL;
}
