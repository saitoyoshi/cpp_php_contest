<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = [];
for ($i = 1; $i <= $N; $i++) {
    $a[$i] = $arr[$i-1];
}
arsort($a);
$max = max($a);
$index = array_search($max,$a);
unset($a[$index]);
$b = array_flip($a);
$boo = array_shift($b);
echo $boo . PHP_EOL;
