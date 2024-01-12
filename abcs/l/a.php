<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
if (strpos($s,$t) !== false) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
