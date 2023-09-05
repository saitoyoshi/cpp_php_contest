<?php

$s1 = trim(fgets(STDIN));
$s2 = trim(fgets(STDIN));
if ($s1 === '#.' && $s2 === '.#') {
    echo 'No';
} elseif ($s1 === '.#' && $s2 === '#.') {
    echo 'No';
} else {
    echo 'Yes';
}
echo PHP_EOL;
