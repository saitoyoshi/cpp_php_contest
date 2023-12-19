<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$x = ($a+$b) / 2;
$y = ($a-$b) / 2;
echo $x . ' ' . $y . PHP_EOL;
