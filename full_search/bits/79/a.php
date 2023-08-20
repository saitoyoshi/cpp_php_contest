<?php

$string = trim(fgets(STDIN));
$array = array_map('intval', str_split($string, 1));
// var_dump($array);

for ($i = 0; $i < (1 << 4); $i++) {
    $tmp = 0;
    $ops = [];
    for ($j = 0; $j < 4; $j++) {
        if ($i & (1 << $j)) {
            $tmp += $array[$j];
            $ops[] = '+';
        } else {
            $tmp -= $array[$j];
            $ops[] = '-';
        }
    }
    if ($tmp === 7) {
        echo $array[0] . $ops[1] . $array[1] . $ops[2] . $array[2] . $ops[3] . $array[3] . '=7' . PHP_EOL;
        exit;
    }
}
