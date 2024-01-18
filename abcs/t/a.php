<?php

$s = str_split(trim(fgets(STDIN)));
$len = count($s);
for ($i = 0; $i < $len; $i+=2) {
    if ($s[$i] === 'L') {
        echo 'No' . PHP_EOL;
        exit;
    }
}
for ($i = 1; $i < $len; $i+=2) {
    if ($s[$i] === 'R') {
        echo 'No' . PHP_EOL;
        exit;
    }
}
echo 'Yes' . PHP_EOL;
