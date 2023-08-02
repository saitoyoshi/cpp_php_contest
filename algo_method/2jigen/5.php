<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$map = [];
for ($i = 0; $i < $H; $i++) {
    $map[] = trim(fgets(STDIN));
}
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    $cnt = 0;
    [$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    for ($j = $y-1; $j <$y + 2; $j++) {
        if ($j < 0) {
            continue;
        }
        if (isset($map[$x][$j])) {
            if ($map[$x][$j] === "#") {
                $cnt++;
            }
        }
    }
    for ($j = $x-1;$j < $x + 2; $j++) {
        if ($j < 0) {
            continue;
        }
        if (isset($map[$j][$y])) {
            if ($map[$j][$y] === "#") {
                $cnt++;
            }
        }
    }
    echo $cnt . PHP_EOL;
}
// echo $cnt . PHP_EOL;
