<?php

$s = trim(fgets(STDIN));
$c = strpos($s, 'C');
$f = strrpos($s,'F');
if ($c !== false && $f !== false && $c < $f) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
