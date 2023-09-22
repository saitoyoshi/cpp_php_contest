<?php

$s = trim(fgets(STDIN));
$len = strlen($s);
$flag = true;
for ($i = 0; $i < $len; $i++) {
    if ($i % 2 === 0) {
        if (!ctype_lower($s[$i])) {
            $flag = false;
        }
    } else {
        if (!ctype_upper($s[$i])) {
            $flag = false;
        }
    }
}
echo $flag ? 'Yes' . PHP_EOL : 'No' . PHP_EOL;
