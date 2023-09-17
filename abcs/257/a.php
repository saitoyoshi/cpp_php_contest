<?php

[$N,$K,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$L = array_map('intval',explode(" ", trim(fgets(STDIN))));

// 最後に$N+1の値の要素を追加しておく
// $A = $A[$L[$i]-1]++;
// if $A[$L[$i]] -$A[$L[$i]-1] !== 0 && $A[$L[$i]] !== $N+1
for ($i = 0; $i < $Q; $i++) {
    if ($A[$L[$i]] - $A[$L[$i]-1] !== 1 && $A[$L[$i]-1] !== $N) {
        $A[$L[$i]-1]++;
    }
}
echo implode(" ", $A) . PHP_EOL;
