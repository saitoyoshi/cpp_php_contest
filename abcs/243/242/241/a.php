<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $M; $i++) {
    if (in_array($B[$i], $A)) {
        $A = removeSpecifiedNum($A,$B[$i]);
        if ($A === false) {
            echo 'No' . PHP_EOL;
            exit;
        }
    } else {
        echo 'No' . PHP_EOL;
        exit;
    }
}
echo 'Yes' . PHP_EOL;
function removeSpecifiedNum($arr, $n) {

    $index = array_search($n,$arr);
    if ($index === false) {
        return false;
    }
    unset($arr[$index]);
    return $arr;
}
