<?php

$s = trim(fgets(STDIN));
$x = strpos($s,'B',0);
$y = strpos($s,'B', $x+1);
// echo $x . ':'. $y . PHP_EOL;
$cond1 = ($x % 2 === 0 && $y % 2 === 1) || ($x % 2 === 1 && $y % 2 === 0);
// var_dump($cond1);
$x2 = strpos($s,'R',0);
$y2 = strpos($s,'R',$x2+1);
$z =  strpos($s,'K',0);

$cond2 = $x2 < $z && $z < $y2;
if ($cond1 && $cond2) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;

}
