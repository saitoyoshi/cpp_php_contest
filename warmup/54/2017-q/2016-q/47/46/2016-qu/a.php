<?php

$t = 'CODEFESTIVAL2016';
$s = trim(fgets(STDIN));
$cnt = 0;
for ($i = 0; $i < 16; $i++) {
    if ($s[$i] !== $t[$i]) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
