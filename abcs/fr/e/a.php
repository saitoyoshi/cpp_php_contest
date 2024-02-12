<?php

$s = str_split(trim(fgets(STDIN)));
$t = str_split(trim(fgets(STDIN)));
for ($i = 0; $i < count($s); $i++) {
    if ($s[$i] !== $t[$i]) {
        echo ($i+1) . PHP_EOL;exit;
    }
}
echo ($i+1) . PHP_EOL;
