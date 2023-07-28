<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$result = 0;
for ($i = 1; $i < $N; $i++) {
    if ($arr[$i] > $arr[$i - 1]) {
        $result++;
    }
}
echo $result . PHP_EOL;
