<?php

$s = trim(fgets(STDIN));
$len = strlen($s);
$m = 0;
for ($i = 0; $i < $len; $i++) {
    for ($j = $i+1; $j <= $len; $j++) {
        // var_dump(substr($s,$i,$j-$i));
        $substr = substr($s,$i,$j-$i);
        if (isKaibun($substr)) {
            // echo substr($s,$i,$j-$i) . PHP_EOL;
            $sublen = strlen($substr);
            $m = max($m,$sublen);
            // if ($m < $sublen) {
            //     $m = $sublen;
            // }
        }
    }
}
echo $m . PHP_EOL;;

function isKaibun($s) {
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        if ($s[$i] === $s[$len-1-$i]) {
            ;
        } else {
            return false;
        }
    }
    return true;
}
