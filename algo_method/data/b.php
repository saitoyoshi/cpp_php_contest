<?php

$N = (int) fgets(STDIN);
$arr = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
for ($i = 1; $i <= $Q; $i++) {
    [$cmd,$k,$val] = array_map(function ($v) {
        return (int) $v;
    }, explode(" ", trim(fgets(STDIN))));
    if ($cmd === 0) {
        array_splice($arr,$k,0,$val);
    } elseif ($cmd === 1) {
        array_splice($arr,$k,1);
    } else {
        $counts = array_count_values($arr);
        if (isset($counts[$k])) {
            echo $counts[$k] . PHP_EOL;
        } else {
            echo '0' . PHP_EOL;
        }
    }
}
