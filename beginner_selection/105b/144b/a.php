<?php

$N = (int) fgets(STDIN);
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($N === ($i * $j)) {
            echo 'Yes' . PHP_EOL;
            exit;
        }
    }
}
echo 'No' . PHP_EOL;
