<?php

$N = (int) fgets(STDIN);
$strings = [];
for ($i = 0; $i < $N; $i++) {
    $strings[$i] = trim(fgets(STDIN));
}
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        if ($strings[$i] === $strings[$j]) {
            echo 'Yes' . PHP_EOL;
            exit;
        }
    }
}
echo 'No' . PHP_EOL;
