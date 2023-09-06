<?php

$list = [];
$list[0]['value'] = 'nil';
$index = 1;
$nextCnt = 1;
$list[0]['next'] = $nextCnt;
$nextCnt++;
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    $query = explode(" ", trim(fgets(STDIN)));
    $cmd = (int)$query[0];
    if ($cmd === 0) {
        // insert $query[1]
        $S = $query[1];
        // このあたりでわからなくなっている
        if ($S === 'nil') {
            $index--;
            $list[$index]['next'] = 0;
        } else {
            $list[$index]['value'] = $S;
            $list[$index]['next'] = $nextCnt;
            $nextCnt++;
            $index++;
        }
    } else {
        // output $query[1]
        $k = $query[1];
        for ($pos = 1; $pos <= $k; $pos++) {
            if ($list[$pos]['value'] !== 'nil')
            $list[$pos]['value'] . PHP_EOL;
        }
    }
}
