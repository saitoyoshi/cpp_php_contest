<?php

$s = str_split(trim(fgets(STDIN)));
$len = count($s);
$lower = range('a','z');
$upper = range('A','Z');
if ($len === 1) {
    if (in_array($s[0], $lower)) {
        echo 'Yes' . PHP_EOL;
        exit;
    } else {
        echo 'No' . PHP_EOL;
        exit;
    }
}
for ($i = 1; $i <= $len-1; $i+=2) {
    if ((in_array($s[$i-1],$lower) && in_array($s[$i], $upper))) {
        ;
    } else {
        echo 'No' . PHP_EOL;
        exit;
    }
}
echo 'Yes' . PHP_EOL;
