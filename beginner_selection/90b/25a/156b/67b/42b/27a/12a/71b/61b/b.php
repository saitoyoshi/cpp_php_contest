<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = array_fill(1,$N,0);
for ($i = 0; $i < $M; $i++) {
    [$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $result[$a]++;
    $result[$b]++;
}
for ($i = 1; $i <= $N; $i++) {
    echo $result[$i] . PHP_EOL;
}
