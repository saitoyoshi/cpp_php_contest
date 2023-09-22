<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
$cnt = 0;
for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] !== $t[$i]) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
