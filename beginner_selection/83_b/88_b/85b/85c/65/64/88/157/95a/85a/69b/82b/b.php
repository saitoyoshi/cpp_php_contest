<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

$sArr = str_split($s);
sort($sArr);
$tArr = str_split($t);
rsort($tArr);

if ((implode("",$sArr) < implode("",$tArr))) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
