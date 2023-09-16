<?php
$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $N-1; $i++) {
    echo $arr[$i] .' ';
    if ($arr[$i] < $arr[$i+1]) {
        for ($j = $arr[$i]+1; $j < $arr[$i+1]; $j++) {
            echo $j.' ';
        }
    } else {
        for ($j = $arr[$i]-1; $j >= $arr[$i+1]+1; $j--) {
            echo $j . ' ';
        }
    }
}
echo $arr[$N-1] . PHP_EOL;
