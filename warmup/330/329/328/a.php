<?php

[$n,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$scores = array_map('intval',explode(" ", trim(fgets(STDIN))));

$filtered = array_filter($scores, fn($v) => $v <= $x);
echo array_sum($filtered) . PHP_EOL;
