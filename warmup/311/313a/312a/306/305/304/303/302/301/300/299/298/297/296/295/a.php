<?php

$N = (int) fgets(STDIN);
$arr = explode(" ", trim(fgets(STDIN)));
for ($i = 0; $i < $N; $i++) {
    $s = $arr[$i];
    if ($s === 'and' || $s === 'not' || $s === 'that' || $s === 'the' || $s === 'you') {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
