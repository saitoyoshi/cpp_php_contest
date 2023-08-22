<?php

$string = trim(fgets(STDIN));
for ($i = 0; $i < strlen($string) / 2; $i++) {
    [$string[2 * $i], $string[2 * $i + 1]] = [$string[2 * $i + 1], $string[2 * $i]];
}
echo $string . PHP_EOL;
