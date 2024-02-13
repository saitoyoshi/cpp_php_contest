<?php

$s = trim(fgets(STDIN));
if (isOk($s)) {
    echo 'Yes';
} else {
    echo 'No';

}
echo PHP_EOL;
function isOk($s) {
    $len = strlen($s);
    $bflag = false;
    $cflag = false;

    for ($i = 0; $i < $len; $i++) {
        if ($s[$i] === 'B') {
            $bflag = true;
        }
        if ($s[$i] === 'C') {
            $cflag = true;
        }
        if ($bflag && $s[$i] === 'A' || $cflag && $s[$i] === 'A') {
            return false;
        }
        if ($cflag && $s[$i] === 'B') {
            return false;
        }
    }
    return true;
}
