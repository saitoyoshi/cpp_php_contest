<?php

[$H,$N] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$sum = array_sum($arr);
echo ($sum >= $H ? 'Yes' : 'No') . PHP_EOL;
