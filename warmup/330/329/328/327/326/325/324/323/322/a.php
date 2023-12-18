<?php

$N = (int) trim(fgets(STDIN));
$s = trim(fgets(STDIN));

for ($i = 0; $i < $N-2; $i++) {
    $substr = substr($s,$i,3);
    if ($substr === "ABC") {
        echo $i+1 . PHP_EOL;
        exit;
    }
}
echo -1 . PHP_EOL;
