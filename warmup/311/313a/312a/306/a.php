<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    echo str_repeat($string[$i], 2);
}
echo PHP_EOL;
