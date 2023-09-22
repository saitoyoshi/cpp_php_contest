<?php

// マスの番号は奇数
// マスに書かれた整数は奇数
$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
    if ($arr[$i-1] % 2 === 1 && $i % 2 === 1) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
