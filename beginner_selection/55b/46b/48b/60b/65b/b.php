<?php

$N = (int) fgets(STDIN);
$buttons = [];
for ($i = 1; $i <= $N; $i++) {
    $buttons[$i] = (int)fgets(STDIN);
}
$key = 1;
for ($i = 1; $i <= $N; $i++) {
    $key = $buttons[$key];
    if ($key === 2) {
        echo $i . PHP_EOL;
        exit;
    }
}
echo '-1' . PHP_EOL;
