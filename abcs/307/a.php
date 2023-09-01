<?php

$N = (int) fgets(STDIN);
$strings = [];
for ($i = 0; $i < $N; $i++) {
    $strings[] = trim(fgets(STDIN));
}
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($i != $j) {
            if (isKaibun($strings[$i].$strings[$j])) {
                echo 'Yes' . PHP_EOL;
                exit;
            }
        }
    }
}
echo 'No' . PHP_EOL;
function isKaibun($string) {
    $len = strlen($string);
    for ($i = 0; $i <= $len / 2; $i++) {
        if ($string[$i] !== $string[$len - $i - 1]) {
            return false;
        }
    }
    return true;
}
