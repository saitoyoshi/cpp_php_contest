<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$max = 0;
$result = 0;
for ($i = 0; $i < $N; $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
        $result = $i;
    }
}
echo $result . PHP_EOL;
