<?php

[$N,$V] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i < $N; $i++) {
    if ($arr[$i] === $V) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
