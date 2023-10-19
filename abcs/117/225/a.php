<?php

$N = (int) trim(fgets(STDIN));
$bucket =  array_fill(1,$N,0);
for ($i = 1; $i < $N; $i++) {
    [$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $bucket[$a]++;
    $bucket[$b]++;
}
for ($i = 1; $i <= $N; $i++) {
    if ($bucket[$i] === $N-1) {
        echo 'Yes' . PHP_EOL;exit;
    }
}
echo 'No' . PHP_EOL;
