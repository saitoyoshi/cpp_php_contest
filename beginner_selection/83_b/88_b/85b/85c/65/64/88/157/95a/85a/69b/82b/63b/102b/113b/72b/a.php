<?php

$string = trim(fgets(STDIN));
$result = "";
for ($i = 0; $i < strlen($string); $i++) {
    if ($i % 2 === 0) {
        $result = $result . $string[$i];
    }
}
echo $result . PHP_EOL;
