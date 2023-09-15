<?php

$t = ['H','2B','3B','HR'];
$s = [];
for ($i = 0; $i < 4; $i++) {
    $s[] = trim(fgets(STDIN));
}
sort($t);
sort($s);
echo ($s === $t ? 'Yes' : 'No') . PHP_EOL;
