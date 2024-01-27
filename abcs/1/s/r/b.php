<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = explode(" ", trim(fgets(STDIN)));
$t = array_flip(explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $N; $i++) {
    if (isset($t[$s[$i]])) {
        echo 'Yes' . PHP_EOL;
    } else {
        echo 'No' . PHP_EOL;
    }
}
