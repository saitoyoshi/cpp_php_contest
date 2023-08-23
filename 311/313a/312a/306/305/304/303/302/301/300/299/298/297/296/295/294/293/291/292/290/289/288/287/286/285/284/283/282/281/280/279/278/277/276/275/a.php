<?php

$N = (int) fgets(STDIN);
$H = array_map('intval',explode(" ", trim(fgets(STDIN))));
$max = max($H);
$index = array_search($max,$H);
echo $index + 1 . PHP_EOL;
