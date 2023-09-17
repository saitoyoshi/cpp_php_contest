<?php

$s = trim(fgets(STDIN));
$head4letters = substr($s,0,4);
// var_dump($head4letters);
if ($head4letters === 'YAKI') {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
