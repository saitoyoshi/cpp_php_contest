<?php

$s = trim(fgets(STDIN));
$a = [];
for ($i = 0; $i < strlen($s);$i++) {
    $substr = substr($s,1);
    $s = $substr.$s[0];
    $a[] = $s;
}
sort($a);
// var_dump($a);
echo $a[0] . PHP_EOL;
echo $a[strlen($s)-1] . PHP_EOL;
