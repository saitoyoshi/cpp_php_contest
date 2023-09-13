<?php


[$A,$B,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = floor($B/$K);
$b = floor(($A-1) / $K);
echo $a-$b . PHP_EOL;
