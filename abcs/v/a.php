<?php

$s = str_split(trim(fgets(STDIN)));
$len = count($s);
$o = array_unique($s);
if (count($o) === $len) {
    echo 'yes' . PHP_EOL;
    exit;
}
echo 'no' . PHP_EOL;
