<?php

$target = "ACEGBDFAC";
$string = trim(fgets(STDIN));
for ($i = 0; $i < strlen($target); $i++) {
    if (substr($target,$i,3) === $string) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
