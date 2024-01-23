<?php

$N = (int) trim(fgets(STDIN));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$b = array_map('intval',explode(" ", trim(fgets(STDIN))));
$c = array_map('intval',explode(" ", trim(fgets(STDIN))));

if ($a[0]+1 === $a[1]) {

}
$r = array_sum($b);
$tmp = [];
for ($i = 0; $i < $N-1; $i++) {
    if ($a[$i]+1 === $a[$i+1]) {
        $tmp[] = $a[$i];
    }
}
foreach ($tmp as $v) {
    $r += $c[$v-1];
}
// var_dump($tmp);
echo $r . PHP_EOL;
