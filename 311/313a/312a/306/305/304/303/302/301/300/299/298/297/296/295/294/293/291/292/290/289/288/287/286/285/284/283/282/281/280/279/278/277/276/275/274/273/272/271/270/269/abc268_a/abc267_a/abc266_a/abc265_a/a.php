<?php

[$X,$Y,$N] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($Y / 3 >= $X) {
    echo $X * $N . PHP_EOL;
} else {
    $q = (int) ($N / 3);
    $r = $N % 3;
    echo ($Y * $q + $r * $X) . PHP_EOL;
}
