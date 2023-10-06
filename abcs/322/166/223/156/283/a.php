<?php

$s = trim(fgets(STDIN));
$cnt = 0;
for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] !== '0') {
        $cnt++;
    } else {
        if ($i !== strlen($s)-1) {
            if ($s[$i+1] === '0') {
                $cnt++;
                $i++;
            } else {
                $cnt++;
            }
        } else {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
