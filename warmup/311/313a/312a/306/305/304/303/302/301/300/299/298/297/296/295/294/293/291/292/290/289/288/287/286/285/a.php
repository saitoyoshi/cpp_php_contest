<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a === (int)floor($b / 2)) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
