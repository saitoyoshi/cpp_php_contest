<?php

$pos = [];
for ($i = 0; $i < 3; $i++) {
    $pos[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$minX = min($pos[0][0],$pos[1][0],$pos[2][0]);
$maxX = max($pos[0][0],$pos[1][0],$pos[2][0]);
$minY = min($pos[0][1],$pos[1][1],$pos[2][1]);
$maxY = max($pos[0][1],$pos[1][1],$pos[2][1]);

$candidates = [[$minX,$minY],[$minX,$maxY],[$maxX,$minY],[$maxX,$maxY]];
foreach ($candidates as $candidate) {
    if (!in_array($candidate, $pos)) {
        echo $candidate[0] . ' ' . $candidate[1] . PHP_EOL;
    }
}
