<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));
for ($i = 0; $i < $N-1; $i++) {
    if ($string[$i] === 'M' && $string[$i+1] === 'M' || $string[$i] === 'F' && $string[$i+1] === 'F') {
        echo 'No' . PHP_EOL;
        exit;
    }
}
echo 'Yes' . PHP_EOL;
