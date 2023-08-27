<?php

[$N,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$days = [];
for ($i = 0; $i < $N; $i++) {
    $days[] =  trim(fgets(STDIN));
}
// var_dump($days);
$result = 0;
$maxResult = 0;
for ($i = 0; $i < $D; $i++) {
    $cnt = 0;
    for ($j = 0; $j < $N; $j++) {
        if ($days[$j][$i] === 'o') {
            $cnt++;
        }
    }
    if ($cnt === $N) {
        $result++;
        if ($result === $D) {
            echo $D . PHP_EOL;
            exit;
        }
    } else {
        if ($maxResult < $result) {
            $maxResult = $result;
        }
        $result = 0;
    }
}
echo $maxResult . PHP_EOL;
