<?php


$string = trim(fgets(STDIN));
$t = "ACEGBDFAC";

if (strpos($t,$string) !== false) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}
