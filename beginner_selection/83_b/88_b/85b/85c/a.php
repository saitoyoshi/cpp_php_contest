<?php

[$N,$Y] = array_map('intval',explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i <= $N; $i++) {
    for ($j = 0; $j + $i <= $N; $j++) {
            if ((10000 * $i + 5000 * $j + 1000 * ($N-$i-$j)) === $Y) {
                echo $i . ' ' . $j . ' ' . ($N-$i-$j) . PHP_EOL;
                exit;
            }
    }
}
echo '-1 -1 -1' . PHP_EOL;
