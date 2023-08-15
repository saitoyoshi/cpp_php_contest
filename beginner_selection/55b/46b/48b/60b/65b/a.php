<?php

$N = (int) fgets(STDIN);
$buttons = [];
for ($i = 1; $i <= $N; $i++) {
    $buttons[$i] = (int)fgets(STDIN);
}
$k = 1;
$cnt = 1;
$v = $buttons[$k];
while ($v !== 2) {
    $cnt++;
    $k = $v;
    $keys[] = $v;
    $v = $buttons[$k];
    if (in_array($v, $keys)) {
        echo '-1' . PHP_EOL;
        exit;
    }
}
echo $cnt . PHP_EOL;
