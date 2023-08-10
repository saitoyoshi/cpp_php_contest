<?php

$string = trim(fgets(STDIN));
$result = "";
for ($i = 0; $i < strlen($string); $i += 2) {
    $result .= $string[$i];
}
echo $result . PHP_EOL;
