<?php

[$H,$W,$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$map = [];
for ($i = 0; $i < $H; $i++) {
    $map[] = trim(fgets(STDIN));
}
for ($i = $x-1; $i < $x-1 + 3; $i++) {
    for ($j = $y-1; $j < $y-1 + 3; $j++) {
        echo $map[$i][$j];
    }
    echo PHP_EOL;
}
