<?php

// fn := 0以上n以下の整数のうち条件を満たすもの個数と定義する
// このとき、求めるものは、fb - fa-1である。ただし、a = 0のときに、f-1であることに注意

function func($n, $x) {
    if ($n === -1) {
        return 0;
    }
    return (int)($n / $x) + 1;
}
[$a,$b,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($b / $x <= 2_147_483_647) {
    echo (func($b,$x) - func($a-1, $x)) . PHP_EOL;
} else {
    $str = (string)(func($b,$x) - func($a-1, $x));
    $keta = strlen($str);
    for ($i = 0; $i < $keta; $i++) {
        echo $str[0];
    }
    echo PHP_EOL;

}
