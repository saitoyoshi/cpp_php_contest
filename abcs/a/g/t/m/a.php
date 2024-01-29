<?php

$N = (int) trim(fgets(STDIN));
for ($i = 0; $i < 998244353; $i++) {
    if (($N-$i) % 998244353 === 0) {
        echo $i . PHP_EOL;exit;
    }
}
