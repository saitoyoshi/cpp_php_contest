<?php


[$s1,$s2] = explode(" ", trim(fgets(STDIN)));

$numstr = str_split(strrev($s1));
$numint = array_map('intval', $numstr);

$numstr2 = str_split(strrev($s2));
$numint2 = array_map('intval', $numstr2);
$maxdigit = min(count($numint),count($numint2));
for ($i = 0; $i < $maxdigit; $i++) {
    if (($numint[$i] + $numint2[$i]) >= 10) {
        echo 'Hard' . PHP_EOL;
        exit;
    }
}
echo 'Easy' . PHP_EOL;
