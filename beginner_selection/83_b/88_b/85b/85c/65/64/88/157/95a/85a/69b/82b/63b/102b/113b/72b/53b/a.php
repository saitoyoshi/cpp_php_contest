<?php

$string = trim(fgets(STDIN));
$head = 200001;
$tail = 1;
for ($i = 0, $length = strlen($string); $i < $length; $i++) {
    if ($string[$i] === "A" && $head > $i) {
        $head = $i;
    }
    if ($string[$i] === "Z" && $tail < $i) {
        $tail = $i;
    }
}
echo ($tail - $head + 1) . PHP_EOL;
