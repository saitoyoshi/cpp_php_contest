<?php

$N = (int) fgets(STDIN);
$result = 1;

for ($i = 1; $i <= $N; $i++) {
    $result *= $i;
    $result %= 1000000007;
}
echo $result . PHP_EOL;
