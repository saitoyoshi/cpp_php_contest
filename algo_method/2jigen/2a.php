<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Stable = [];
$Ttable = [];
for ($i = 0; $i < $H; $i++) {
    $Stable[] = trim(fgets(STDIN));
}
for ($i = 0; $i < $H; $i++) {
    $Ttable[] = trim(fgets(STDIN));
}
$cnt = 0;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($Stable[$i][$j] !== $Ttable[$i][$j]) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
