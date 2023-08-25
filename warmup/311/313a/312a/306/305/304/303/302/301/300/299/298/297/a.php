<?php

[$N,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$T = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $N - 1; $i++) {
    if ($T[$i+1] - $T[$i] <= $D) {
        echo $T[$i+1] . PHP_EOL;
        exit;
    }
}
echo -1 . PHP_EOL;
