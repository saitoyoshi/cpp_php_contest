<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$alfabets = range('A','Z');
$arr = [];
foreach ($alfabets as $letter) {
    for ($i = 0; $i < $N; $i++) {
        $arr[] = $letter;
    }
}
echo $arr[$X-1] . PHP_EOL;
