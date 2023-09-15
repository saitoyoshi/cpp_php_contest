<?php

$s = [];
for ($i = 0; $i < 4; $i++) {
    $s[] = trim(fgets(STDIN));
}
if (count(array_unique($s)) === 4) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
