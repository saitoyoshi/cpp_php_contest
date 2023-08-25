<?php


$s = trim(fgets(STDIN));
if ($s[0] !== $s[1] && $s[0] !== $s[2]) {
    echo $s[0] . PHP_EOL;
} elseif ($s[1] !== $s[0] && $s[1] !== $s[2]) {
    echo $s[1] . PHP_EOL;
} elseif ($s[2] !== $s[0] && $s[2] !== $s[1]) {
    echo $s[2] . PHP_EOL;
} else {
    echo -1 . PHP_EOL;
}
