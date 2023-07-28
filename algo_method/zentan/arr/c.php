<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = 0;
for ($i = 0; $i < $N; $i++) {
    if ($arr[$i] > 0) {
        $result++;
    }
}
echo $result . PHP_EOL;
