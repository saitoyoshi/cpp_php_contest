<?php

$N = (int) fgets(STDIN);
$table = [];
for ($i = 0; $i < $N; $i++) {
    $table[] = trim(fgets(STDIN));
}
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($table[$i][$j] === 'W' && $table[$j][$i] !== 'L') {
            echo 'incorrect' . PHP_EOL;
            exit;
        } elseif ($table[$i][$j] === 'L' && $table[$j][$i] !== 'W') {
            echo 'incorrect' . PHP_EOL;
            exit;
        } elseif ($table[$i][$j] === 'D' && $table[$j][$i] !== 'D') {
            echo 'incorrect' . PHP_EOL;
            exit;
        }
    }
}
echo 'correct' . PHP_EOL;
