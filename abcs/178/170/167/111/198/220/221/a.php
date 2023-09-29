<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
if ($s === $t) {
    echo 'Yes' . PHP_EOL;
    exit;
}
generate($s,$t);
function generate($s,$t) {
    $p = $a = str_split($s);
    for ($i = 0; $i < count($a)-1; $i++) {
        $tmp = $a[$i];
        $a[$i] = $a[$i+1];
        $a[$i+1] = $tmp;
        if (implode("",$a) === $t) {
            echo 'Yes' . PHP_EOL;;
            exit;
        };
        $a = $p;
    }
    echo 'No' . PHP_EOL;
}
