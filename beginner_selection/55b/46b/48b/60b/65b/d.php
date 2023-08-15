<?php

$N = (int) fgets(STDIN);
$buttons = [];
for ($i = 1; $i <= $N; $i++) {
    $buttons[$i] = (int)fgets(STDIN);
}
$k = 1;
$cnt = 1;
$v = $buttons[$k];
while (1) {
    if ($v === 2) {
        echo $cnt . PHP_EOL;
        exit;
    }
    $cnt++;
    $k = $v;
    $v = $buttons[$k];
    if ($cnt > $N + 1) {
        break;
    }
}
echo '-1'. PHP_EOL;
