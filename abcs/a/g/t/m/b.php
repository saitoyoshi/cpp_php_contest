<?php

$N = (int) trim(fgets(STDIN));
$r = $N%998244353;
if ($r < 0) {
    $r += 998244353;
}
echo ($r) . PHP_EOL;
