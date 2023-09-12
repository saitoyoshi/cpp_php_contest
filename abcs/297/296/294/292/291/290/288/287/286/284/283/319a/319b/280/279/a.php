<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
$slen = strlen($s);
$tlen = strlen($t);
for ($i = 0; $i < $slen - $tlen + 1; $i++) {
    if (substr($s,$i,$tlen) === $t) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
