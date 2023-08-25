<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));
$arr = str_split($string);
$first = array_search('|', $arr);
unset($arr[$first]);
$last = array_search('|', $arr);
$needle = array_search('*', $arr);
echo ($first < $needle && $needle < $last) ? 'in' : 'out';
echo PHP_EOL;
