<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// 解毒できる最大量
$eatableCookie = min($a,$b);
// お腹を壊した状態で食べられる最大量。+1は壊してない状態で毒がひとつ食べられるから
$poisonCookie = min($c,$a+$b+1);
echo ($eatableCookie+$poisonCookie) . PHP_EOL;
