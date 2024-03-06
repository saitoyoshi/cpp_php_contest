<?php

$s = str_split(trim(fgets(STDIN)));
$t = trim(fgets(STDIN));
if ($t === implode("", $s)) {
    echo 'Yes' . PHP_EOL;exit;
}
for ($i = 0; $i < count($s)-1; $i++) {
    [$s[$i] , $s[$i+1]] = [$s[$i+1],$s[$i]];
    // echo implode("", $s) . PHP_EOL;
    if ($t === implode("", $s)) {
        echo 'Yes' . PHP_EOL;exit;
    }
    [$s[$i] , $s[$i+1]] = [$s[$i+1],$s[$i]];
}
echo 'No' . PHP_EOL;
