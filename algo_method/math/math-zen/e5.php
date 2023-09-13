<?php

$apple = 130;
$orange = 100;
// 1000 - (a * 3 + o * x ) = 210
// 790 = 3 * a + o * x
// o * x = 790 - 3 * a
echo (790 - 3 * $apple) / $orange . PHP_EOL;
