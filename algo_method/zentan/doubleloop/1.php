<?php

function isPrime($n) {
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
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    if (isPrime($arr[$i])) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
