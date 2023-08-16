<?php

$string = trim(fgets(STDIN));
$target = ['A','C','G','T'];
$cnt = 0;
$result = -1;
for ($i = 0,$len = strlen($string); $i < $len; $i++) {
    if (in_array($string[$i], $target)) {
        $cnt++;
    } else {
        if ($result < $cnt) {
            $result = $cnt;
            $cnt = 0;
        }
    }
}
echo ($result < $cnt) ? $cnt : $result . PHP_EOL;
