<?php

$N = (int) trim(fgets(STDIN));
$result = intdiv($N,10);
// 負であり、10で割り切れないときは、調整
if ($N < 0 && $N % 10 !== 0) {
    $result--;
}
// 正であるか、割り切れるときはそのまま
echo $result . PHP_EOL;
