<?php

$s = trim(fgets(STDIN));
$T = 'oxx';
for ($i = 0; $i < 11; $i++) {
    $T .= 'oxx';
}
$len = strlen($s);
for ($i = 0; $i < strlen($T); $i++) {
    $substr = substr($T,$i,$len);
    if ($substr === $s) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
