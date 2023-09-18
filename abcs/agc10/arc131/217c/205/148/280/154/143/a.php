<?php

$N = (int) fgets(STDIN);
$s = str_split(trim(fgets(STDIN)));

$flag = true;
while ($flag) {
    $flag = false;
    for ($i = 0; $i < count($s); $i++) {
        if ($s[$i] === $s[$i+1]) {
            unset($s[$i+1]);
            $flag = true;
            $s = array_values($s);
            break;
        }
    }
}
echo count($s). PHP_EOL;
