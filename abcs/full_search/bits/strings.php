<?php

$string = "hello";
for ($i = 0; $i < (1 << strlen($string)); $i++) {
    $indexs = [];
    $str = "";
    for ($j = 0; $j < strlen($string); $j++) {
        if ($i & (1 << $j)) {
            $indexs[] = $j;
            $str .= $string[$j];
        }
    }
    echo $str . ': ' . '{' . implode(" ", $indexs) . '}' . PHP_EOL;
}
