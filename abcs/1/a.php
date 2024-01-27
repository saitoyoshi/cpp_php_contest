<?php

$result = PHP_INT_MAX;
$N = (int) trim(fgets(STDIN));
for ($i = 0; $i <= 62; $i++) {
    $b = 2 ** $i;
    $a = intdiv($N,$b);
    $c = $N-$a*$b;
    $result = min($result,$a+$i+$c);
}
echo $result . PHP_EOL;
