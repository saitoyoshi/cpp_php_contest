<?php

$grid = [];
for ($i = 1; $i <= 8; $i++) {
    $grid[$i] = trim(fgets(STDIN));
}
// var_dump($grid);
$i = 0;
foreach ($grid as $line) {
    $j = strpos($line, '*');
    if ($j !== false) {
        break;
    }
    $i++;
}
// echo 'row:' . $i . ' col:' . $j . PHP_EOL;
$row = range(8,1,-1);
$col = range('a','h');
echo $col[$j].$row[$i] . PHP_EOL;
// var_dump($col);
