<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = [];
for ($i = 0; $i < $M; $i++) {
    [$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $result[$a][] = $b;
    $result[$b][] = $a;
}
for ($i = 1; $i <= $N; $i++) {
    echo count(($result[$i])) . PHP_EOL;
}
