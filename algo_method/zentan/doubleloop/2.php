<?php

function numberOfYakusu($n) {
    $cnt = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0) {
            $cnt++;
        }
    }
    return $cnt;
}
[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = 0;
for ($i = 1; $i <= $N; $i++) {
    if (numberOfYakusu($i) === $K) {
        $result++;
    }
}
echo $result . PHP_EOL;
