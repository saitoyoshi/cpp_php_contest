<?php

$N = (int) fgets(STDIN);
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = trim(fgets(STDIN));
}
$cond1 = isEachDifferent($s, $N);
$cond2 = true;
foreach ($s as $str) {
    if (!isLetterOk($str) || !isNumberOk($str)) {
        $cond2 = false;
    }
}
echo ($cond1 && $cond2) ? 'Yes' : 'No';
echo PHP_EOL;
function isEachDifferent($arrayOfs, $N) {
    for ($i = 0; $i < $N; $i++) {
        for ($j = $i+1; $j < $N; $j++) {
            if ($arrayOfs[$i] === $arrayOfs[$j]) {
                return false;
            }
        }
    }
    return true;
}

function isLetterOk($s) {
    $headLetter = substr($s,0,1);
    if ($headLetter === 'H' || $headLetter === 'D' || $headLetter === 'C' || $headLetter === 'S') {
        return true;
    }
    return false;
}
function isNumberOk($s) {
    $tailLetter = substr($s,1,1);
    if ($tailLetter === 'A' || $tailLetter === '2' || $tailLetter === '3' || $tailLetter === '4' || $tailLetter === '5' || $tailLetter === '6' || $tailLetter === '7' || $tailLetter === '8' || $tailLetter === '9' || $tailLetter === 'T' || $tailLetter === 'J' || $tailLetter === 'Q' || $tailLetter === 'K') {
        return true;
    }
    return false;
}
