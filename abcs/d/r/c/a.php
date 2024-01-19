<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$u = array_unique($arr);
echo count($u) . PHP_EOL;
