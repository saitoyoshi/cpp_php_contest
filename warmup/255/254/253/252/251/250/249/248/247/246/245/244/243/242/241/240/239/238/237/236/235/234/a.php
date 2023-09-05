<?php

$t = (int) fgets(STDIN);

$r = F(F(F($t) + $t)+F(F($t)));
echo $r . PHP_EOL;
function F($x) {
    return $x ** 2 + 2 * $x + 3;
}
