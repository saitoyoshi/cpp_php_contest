<?php

$N = (int) trim(fgets(STDIN));
$n = [];
for ($i = 0; $i < $N; $i++) {
    $n[] = trim(fgets(STDIN));
}
// var_dump($n);
$ndash = array_unique($n);
if (count($ndash) !== $N) {
    echo "Yes" . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
