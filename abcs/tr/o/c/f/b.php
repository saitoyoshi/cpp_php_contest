<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $H; $i++) {
    $s[] = str_split(trim(fgets(STDIN)));
}
$cnt = 0;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($s[$i][$j] === '.') {
            if (isset($s[$i+1][$j])) {
                if ($s[$i+1][$j] === '.') {
                    $cnt++;
                }
            }
            if (isset($s[$i][$j+1])) {
                if ($s[$i][$j+1]=== '.') {
                    $cnt++;
                }
            }
        }
    }
}
echo $cnt . PHP_EOL;
