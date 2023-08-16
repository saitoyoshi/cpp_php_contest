<?php

$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));

$result = 0;
for ($i = 0; $i < $N - 2; $i++) {
    if ($string[$i] === 'A' && $string[$i+1] === 'B' && $string[$i+2] === 'C') {
        $result++;
    }
}
echo $result . PHP_EOL;
