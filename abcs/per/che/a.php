<?php

$s = trim(fgets(STDIN));

// 奇数＋偶数ー＞奇数
$a = [];
for ($i = 0; $i < 8; $i++) {
    if ($s[$i] === 'B') {
        $a[] = $i;
    }
}
// var_dump(array_sum($a));
$num = array_sum($a);
if ($num % 2 === 0) {
    echo 'No' . PHP_EOL;exit;
}
$a = [];
for ($i = 0; $i < 8; $i++) {
    if ($s[$i] === 'R') {
        $a[] = $i;
    }
}
$kPos = strpos($s,'K');
if ($a[0] < $kPos && $kPos < $a[1]  ) {
    echo 'Yes' . PHP_EOL;exit;
}
echo 'No' . PHP_EOL;
