<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $H; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$cnt = 0;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        $letter = $strings[$i][$j];
        if ($letter === 'o') {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
