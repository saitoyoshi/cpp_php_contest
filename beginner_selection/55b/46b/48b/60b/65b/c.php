<?php

$N = (int) fgets(STDIN);
$buttons = [];
for ($i = 1; $i <= $N; $i++) {
    $buttons[$i] = (int)fgets(STDIN);
}
$k = 1;
$v = $buttons[$k];
for ($i = 1; $i <= $N; $i++) {
    if ($v === 2) {
        echo $i . PHP_EOL;
        exit;
    }
    $k = $v;
    $v = $buttons[$k];
}
echo '-1' . PHP_EOL;
