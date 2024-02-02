<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$num = (string)$arr[0] . (string)$arr[1];
if (isHeihou((int)$num)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}

function isHeihou($n) {
    $sqrt = sqrt($n);
    if ($sqrt == (int)$sqrt) {
        return true;
    }
    return false;
}
