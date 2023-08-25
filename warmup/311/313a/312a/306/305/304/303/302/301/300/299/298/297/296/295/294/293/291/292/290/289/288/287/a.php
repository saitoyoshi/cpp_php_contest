<?php

$N = (int) fgets(STDIN);
$for = $against = 0;
for ($i = 0; $i < $N; $i++) {
    $string = trim(fgets(STDIN));
    if ($string === 'For') {
        $for++;
    } else {
        $against++;
    }
}
echo $for > $against ? 'Yes' : 'No';
echo PHP_EOL;
