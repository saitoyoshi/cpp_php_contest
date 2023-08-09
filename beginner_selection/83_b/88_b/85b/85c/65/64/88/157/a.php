<?php

$N = (int) fgets(STDIN);
if ($N % 2 === 0) {
    echo (int)($N / 2) . PHP_EOL;
} else {
    echo (int)(($N / 2) + 1) . PHP_EOL;

}
