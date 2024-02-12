<?php

$s = str_split(trim(fgets(STDIN)));
if ($s[0] === $s[1] && $s[1] === $s[2] && $s[2] === $s[3]) {
    echo 'Weak'. PHP_EOL;;exit;
}
if ((((int)$s[0]+1)%10) === (int)$s[1]) {
    if ((((int)$s[1]+1)%10) === (int)$s[2]) {
        if ((((int)$s[2]+1)%10) === (int)$s[3]) {
            echo 'Weak'. PHP_EOL;;exit;
        }
    }
}
echo 'Strong' . PHP_EOL;
