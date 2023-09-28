<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$x = (4*$a-$b) / 2;
$y = ($b-2*$a) / 2;
if (is_int($x) && is_int($y) && (($x >= 0 && $y > 0) || ($x > 0 && $y >= 0) || $x > 0 && $y > 0)) {
    echo 'Yes' . PHP_EOL;
}  else {
    echo 'No' . PHP_EOL;
}
