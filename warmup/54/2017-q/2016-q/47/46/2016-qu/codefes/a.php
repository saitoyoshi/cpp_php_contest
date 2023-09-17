<?php

[$h,$w] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strs = [];
for ($i = 0; $i < $h; $i++) {
    $strs[] = explode(" ", trim(fgets(STDIN)));
}
// var_dump($strs);exit;
$row = range(1,$h);
$col = range('A','Z');
for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        if ($strs[$i][$j] === 'snuke') {
            echo $col[$j] . $row[$i] . PHP_EOL;
        }
    }
}
