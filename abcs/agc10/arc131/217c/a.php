<?php

$N = (int) fgets(STDIN);
$p = array_map('intval',explode(" ", trim(fgets(STDIN))));
$q = [];
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($i+1 === $p[$j]) {
            $q[$i] = $j+1;
        }
    }
}

echo implode(" ", $q) . PHP_EOL;
