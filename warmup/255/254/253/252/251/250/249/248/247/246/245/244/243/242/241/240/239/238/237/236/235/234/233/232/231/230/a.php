<?php

$N = (int) fgets(STDIN);
if ((int)$N >= 42) {
    $N = (string)((int)$N+1);
}
echo 'AGC'. str_pad($N,3,'0',STR_PAD_LEFT) . PHP_EOL;;
