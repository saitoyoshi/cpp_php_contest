<?php

$s = trim(fgets(STDIN));
[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$t = $s[$a-1];
$s[$a-1] = $s[$b-1];
$s[$b-1] = $t;
echo $s . PHP_EOL;
