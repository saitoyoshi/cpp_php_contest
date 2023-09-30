<?php

$s = trim(fgets(STDIN));
$same = true;
$step = true;
for ($i = 0; $i < 3; $i++) {
    if ($s[$i] !== $s[$i+1]) {
        $same = false;
    }
}
for ($i = 0; $i < 3; $i++) {
    if ((((int)$s[$i]+1)%10) !== (int)$s[$i+1]) {
        $step = false;
    }
}
if ($same|$step) {
    echo 'Weak' . PHP_EOL;
} else {
    echo 'Strong' . PHP_EOL;
}
