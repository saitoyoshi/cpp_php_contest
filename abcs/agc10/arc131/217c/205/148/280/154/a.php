<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
if (count(array_unique($arr)) === $N) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;
