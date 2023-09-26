<?php

[$a,$b,$c,$d] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$left = max($a,$c);
$right = min($b,$d);
echo $left <= $right ? 'Yes' : 'No';
echo PHP_EOL;
