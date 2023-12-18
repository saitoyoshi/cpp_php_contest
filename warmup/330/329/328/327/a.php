<?php

$N = (int) trim(fgets(STDIN));
$s = trim(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $substr = substr($s, $i,2);
    // echo $substr . PHP_EOL;
    if ($substr === "ab" || $substr === "ba") {
        echo "Yes" . PHP_EOL;
        exit;
    }
}
echo "No" . PHP_EOL;
