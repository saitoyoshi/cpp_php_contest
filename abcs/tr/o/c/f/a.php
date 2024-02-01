<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $H; $i++) {
    $s[] = str_split(trim(fgets(STDIN)));
}
$cnt = 0;
// var_dump($s);exit;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($s[$i][$j] === '.' && $s[$i+1][$j] === '.') {
            $cnt++;
            // echo $i.' '.$j . PHP_EOL;
        }
        if ($s[$i][$j] === '.' && $s[$i][$j+1] === '.') {
            $cnt++;
            // echo $i.' '.$j . PHP_EOL;
        }
    }
}
echo $cnt . PHP_EOL;
