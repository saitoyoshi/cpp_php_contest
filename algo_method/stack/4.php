<?php

$X = trim(fgets(STDIN));
$N = (int) fgets(STDIN);
$expression = array_map(function($v) {
    if (is_numeric($v)) {
        return (int)$v;
    } else {
        return $v;
    }
},explode(" ", trim(fgets(STDIN))));
// var_dump($expression);
// exit;
$stack = [];
for ($i = 0; $i < $N; $i++) {
    $shifted = array_shift($expression);
    if (is_int($shifted)) {
        $stack[] = $shifted;
    } else {
        $v1 = array_pop($stack);
        $v2 = array_pop($stack);
        if ($shifted === "+") {
            $v = $v1 + $v2;
        } elseif ($shifted === "*") {
            $v = $v1 * $v2;
        } elseif ($shifted === "-") {
            $v = $v2 - $v1;
        }
        $stack[] = $v;
    }
}
echo $X . "=" . $stack[0] . PHP_EOL;
// echo $stack[0] . PHP_EOL;
