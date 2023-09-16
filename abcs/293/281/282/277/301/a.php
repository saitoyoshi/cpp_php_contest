<?php

// $r = range(5-1,1+1);
// $a = [2,5,1,2];
// array_splice($a,2,0,$r);
// var_dump($a);

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < count($arr)-1; $i++) {
    if (abs($arr[$i] - $arr[$i+1]) !== 1) {
        if ($arr[$i] < $arr[$i+1]) {
            $t = range($arr[$i]+1,$arr[$i+1]-1);
        } else {
            $t = range($arr[$i]-1,$arr[$i+1]+1);
        }
        array_splice($arr,$i+1,0,$t);
    }
}
echo implode(" ", $arr) . PHP_EOL;
// var_dump($arr);
