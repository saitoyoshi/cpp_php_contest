<?php

$s = (trim(fgets(STDIN)));
$slen = strlen($s);
$t = (trim(fgets(STDIN)));
for ($i = 0; $i < $slen; $i++) {
    if ($s[$i] !== $t[$i]) {
        echo $i+1 . PHP_EOL;
        exit;
    }
}
echo $slen+1 . PHP_EOL;
