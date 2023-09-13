<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
for ($i = 0; $i < strlen($t)+1; $i++) {
    if ($s === $prefix = substr($t,0,$i)) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
