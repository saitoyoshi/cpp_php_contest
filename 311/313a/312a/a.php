<?php

$target = "ACEGBDFACEGBDFA";
$string = trim(fgets(STDIN));
for ($i = 0; $i < strlen($target); $i+=2) {
    $subStr = substr($target,$i,3);
    if ($string === $subStr) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
