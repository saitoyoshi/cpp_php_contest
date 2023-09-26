<?php

$s = trim(fgets(STDIN));
$num = 0;
for ($i = 0; $i < strlen($s); $i++) {
    $num += (int)$s[$i];
}
if ($num % 9 === 0) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
