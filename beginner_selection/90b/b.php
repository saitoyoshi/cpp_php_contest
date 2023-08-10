<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$result = 0;
for ($i = $A; $i <= $B; $i++) {
    // 必ず5桁なので 11211
    $s = $i % 10;// 最後の桁
    $t = $i / 10000 % 10; //最初の桁
    $u = $i / 10 % 10; //最後から2番め
    $v = $i / 1000 % 10; //
    // var_dump($i);
    // var_dump($s);
    // var_dump($t);
    // var_dump($u);
    // var_dump($v);
    if ($s === $t && $u === $v) {
        $result++;
    }
}
echo $result . PHP_EOL;
