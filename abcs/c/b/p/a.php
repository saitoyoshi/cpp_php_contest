<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
$len = strlen($s);
for ($i = 0; $i < $len; $i++) {
    if ($s[$i] !== $t[$i]) {
        echo 'No' . PHP_EOL;exit;
    }
}
echo 'Yes' . PHP_EOL;
