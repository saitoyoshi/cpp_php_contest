<?php

$s = trim(fgets(STDIN));
$arr1 = $arr2 = str_split($s);
// $arr = str_split($s);
$t = trim(fgets(STDIN));
if ($s === $t) {
    echo 'Yes' . PHP_EOL;
    exit;
}
$len = strlen($s);
for ($i = 0; $i < $len-1; $i++) {
    [$arr1[$i],$arr1[$i+1]] = [$arr1[$i+1], $arr1[$i]];
    $str = implode("",$arr1);
    // echo implode("",$arr1) . PHP_EOL;;
    if ($str === $t) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
    $arr1 = $arr2;
}
echo 'No' . PHP_EOL;
