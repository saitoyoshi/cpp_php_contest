<?php

$N = (int) fgets(STDIN);
$max = -1;
$result = null;
for ($i = 1; $i <= $N; $i++) {
    $cnt = 0;
    $j = $i;
    while ($j % 2 === 0) {
        $cnt++;
        $j /= 2;
    }
    if ($max < $cnt) {
        $max = $cnt;
        $result = $i;
    }
}
echo $result . PHP_EOL;
