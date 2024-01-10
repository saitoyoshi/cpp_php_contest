<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = substr(trim(fgets(STDIN)),-3);
}
// var_dump($s);
$t = [];
for ($i = 0; $i < $M; $i++) {
    $t[] = trim(fgets(STDIN));
}
$cnt = 0;
foreach ($s as $v) {
    if (in_array($v,$t)) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
