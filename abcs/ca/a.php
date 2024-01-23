<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
// sをtに一致させることができるか
$l = range('a','z');
function h($s,$k,$l) {
    $a = str_split($s);
    $r = [];
    foreach ($a as $v) {
        $index = array_search($v,$l);
        $r[] = $l[($index+$k)%26];
    }
    return implode($r);
}
for ($i = 1; $i <= 26; $i++) {
    if (h($s,$i,$l) === $t) {
        echo 'Yes' . PHP_EOL;exit;
    }
}
echo 'No' . PHP_EOL;
