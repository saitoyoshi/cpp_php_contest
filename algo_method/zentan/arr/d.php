<?php

[$N,$V] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = -1;
for ($i = 0; $i < $N; $i++) {
    if ($arr[$i] === $V) {
        $result = $i;
    }
}
echo $result . PHP_EOL;
