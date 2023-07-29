<?php

$N = (int) fgets(STDIN);
$S = trim(fgets(STDIN));

$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        if ($S[$i] === $S[$j]) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
