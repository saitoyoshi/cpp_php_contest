<?php

$s = "abcde";
for ($i = 0; $i < strlen($s);$i++) {
    $substr = substr($s,0,strlen($s)-1);
    $s = $s[-1].$substr;
    echo $s . PHP_EOL;
}
// for ($i = 0; $i < strlen($s);$i++) {
//     $substr = substr($s,1);
//     $s = $substr . $s[0];
//     echo $s . PHP_EOL;
// }
