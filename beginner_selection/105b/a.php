<?php

$N = (int) fgets(STDIN);
for ($i = 0; $i <= 25; $i++) {
    for ($j = 0; $j <= 15; $j++)
    if ($N === (4 * $i + 7 * $j)) {
        echo "Yes" . PHP_EOL;
        exit;
    }
}
echo "No" . PHP_EOL;
