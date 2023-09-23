<?php

$N = (int) fgets(STDIN);
[$s,$t] = explode(" ", trim(fgets(STDIN)));
for ($i = 0; $i < $N; $i++) {
    echo $s[$i].$t[$i];
}
echo PHP_EOL;
