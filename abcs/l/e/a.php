<?php

$N = (int) trim(fgets(STDIN));
$a = [];
for ($i = 0; $i < $N; $i++) {
    $name = trim(fgets(STDIN));
    if (array_key_exists($name,$a)) {
        $a[$name]++;
    } else {
        $a[$name] = 1;
    }
}
arsort($a);
// var_dump($a);
foreach ($a as $k => $v) {
    echo $k . PHP_EOL;
    exit;
}
