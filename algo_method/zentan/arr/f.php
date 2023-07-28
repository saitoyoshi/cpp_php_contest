<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$max = -101;
for ($i = 0; $i < $N; $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
}
echo $max . PHP_EOL;
