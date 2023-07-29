<?php

function is_prime($n) {
    if ($n === 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

$N = (int) fgets(STDIN);
if (is_prime($N)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
