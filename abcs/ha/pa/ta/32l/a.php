<?php

$N = (int) trim(fgets(STDIN));
for ($i = $N; $i <= 919; $i++) {
    $one = $i%10;
    $ten = floor($i/10)%10;
    $hund = floor($i/100)%10;
    if (($hund*$ten) === $one) {
        echo $i . PHP_EOL;
        exit;
    }

}
