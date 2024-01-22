<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$b = array_map('intval',explode(" ", trim(fgets(STDIN))));
foreach ($b as $v) {
    if (in_array($v,$a)) {
        $i = array_search($v,$a);
        unset($a[$i]);
    } else {
        echo 'No'. PHP_EOL;exit;
    }
}
echo 'Yes' . PHP_EOL;
