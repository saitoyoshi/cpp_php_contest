<?php

$s = trim(fgets(STDIN));
$k = strlen($s);
$cnt = 0;
for ($i = 0; $i < $k; $i++) {
    if ($s[$i] === 'o') {
        $cnt++;
    }
}
if ($cnt >= $k-7) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;
