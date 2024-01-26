<?php

[$N,$L] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// L+i-1
$arr = [];
for ($i = 1; $i <= $N; $i++) {
    $arr[] = $L+$i-1;
}
// var_dump($arr);exit;
$S = array_sum($arr);
$S2s = [];
foreach ($arr as $v) {
    $S2s[] = $S-$v;
}
// var_dump($S2s);
$tmp2 = [];
foreach ($S2s as $S2) {
    $tmp2[] = abs($S-$S2);
}
// var_dump($tmp2);
// echo ($min = min($tmp2));
$min = min($tmp2);
if ($S < 0) {
    echo $S+$min . PHP_EOL;
} else {
    echo $S-$min . PHP_EOL;
}
