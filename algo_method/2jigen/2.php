<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < $H; $j++) {
        $strings[$i][] = trim(fgets(STDIN));
    }
}
$cnt = 0;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($strings[0][$i][$j] !== $strings[1][$i][$j]) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
