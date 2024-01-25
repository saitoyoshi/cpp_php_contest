<?php

$N = (int) trim(fgets(STDIN));
$bArr = $arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
if (isSorted($bArr)) {
    echo 'YES' . PHP_EOL;exit;
}
for ($i = 0; $i < $N; $i++) {

        for ($j = $i+1; $j < $N; $j++) {
            [$bArr[$i],$bArr[$j]] = [$bArr[$j],$bArr[$i]];
            if (isSorted($bArr)) {
                echo 'YES' . PHP_EOL;exit;
            }
            $bArr = $arr;
        }
}
echo 'NO' . PHP_EOL;
function isSorted($arr) {
    $len = count($arr);
    for ($i = 0; $i < $len-1; $i++) {
        if ($arr[$i] > $arr[$i+1]) {
            return false;
        }
    }
    return true;
}
