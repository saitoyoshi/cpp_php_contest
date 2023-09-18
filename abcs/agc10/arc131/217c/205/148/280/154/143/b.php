<?php

$N = (int) fgets(STDIN);
$s = (trim(fgets(STDIN)));

$pattern = '/(\w)\1*/';
preg_match_all($pattern,$s,$matches);
$groups = $matches[0];
echo count($groups) . PHP_EOL;
