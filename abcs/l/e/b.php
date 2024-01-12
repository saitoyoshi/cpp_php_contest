<?php

$N = (int) trim(fgets(STDIN));
$names = [];
for ($i = 0; $i < $N; $i++) {
    $names[] = trim(fgets(STDIN));
}
$max = 0;
for ($i = 0; $i < $N; $i++) {
    $name = $names[$i];
    $cnt = 0;
    for ($j = 0; $j < $N; $j++) {
        if ($names[$j] === $name) {
            $cnt++;
        }
    }
    if ($cnt > $max) {
        $max = $cnt;
        $result = $name;
    }
}
echo $result . PHP_EOL;
