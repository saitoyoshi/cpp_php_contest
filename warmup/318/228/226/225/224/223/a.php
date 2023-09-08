<?php

$N = (int) fgets(STDIN);
if ($N % 100 === 0 && $N !== 0) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
