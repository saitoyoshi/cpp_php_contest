<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));

function f($i,$j) {
    global $A;
    if ($i === 0) {
        if ($j === 0) {
            return true;
        } else {
            return false;
        }
    } else {
        $flag = false;
        if ($j >= $A[$i-1] && f($i-1,$j-$A[$i-1])) {
            $flag = true;
        }
        if (f($i-1,$j)) {
            $flag = true;
        }
        return $flag;
    }
}
if (f($N,$X)) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;

}
