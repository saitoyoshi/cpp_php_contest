<?php

$s = trim(fgets(STDIN));
$T = str_repeat('oxx',12);
if (strpos($T,$s) !== false) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
