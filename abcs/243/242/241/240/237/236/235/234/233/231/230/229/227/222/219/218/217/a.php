<?php

$s = ['ABC' => 0, 'ARC' => 0, 'AGC' => 0, 'AHC' => 0];
for ($i = 0; $i < 3; $i++) {
    $s[trim(fgets(STDIN))]++;;
}
$s = array_flip($s);
echo $s[0] . PHP_EOL;
