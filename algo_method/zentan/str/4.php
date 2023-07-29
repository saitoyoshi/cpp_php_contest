<?php

$N = (int) fgets(STDIN);
$S = trim(fgets(STDIN));
$T = trim(fgets(STDIN));

$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    if ($S[$i] !== $T[$i]) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
