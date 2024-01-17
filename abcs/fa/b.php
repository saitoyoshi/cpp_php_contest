<?php

$p = (int) trim(fgets(STDIN));
function fac($n) {
    if ($n === 1) {
        return 1;
    }
    return $n * fac($n-1);
}
$cnt = 0;
for ($i = 10; $i >= 1; $i--) {
    $n = fac($i);
    while ($p >= $n) {
        $p-=$n;
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
