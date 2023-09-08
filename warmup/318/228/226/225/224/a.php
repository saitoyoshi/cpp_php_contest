<?php

$string = trim(fgets(STDIN));
$lastletter = substr($string, -1);
if ($lastletter === 'r') {
    echo 'er' . PHP_EOL;
} else {
    echo 'ist' . PHP_EOL;
}
