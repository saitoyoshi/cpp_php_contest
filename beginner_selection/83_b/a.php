<?php

[$N,$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$result = 0;
for ($i = 1; $i <= $N; $i++) {
    $numericString = (string) $i;
    $digitArray = array_map('intval',str_split(trim($i)));
    $sum = 0;
    foreach ($digitArray as $v) {
        $sum += $v;
    }
    if ($A <= $sum && $sum <= $B) {
        $result += $i;
    }
}
echo $result . PHP_EOL;
