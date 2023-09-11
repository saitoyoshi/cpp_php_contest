<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$ss = [];
for ($i = 0; $i < $N; $i++) {
    $ss[] = substr(trim(fgets(STDIN)),-3);
}
// var_dump($ss);
$mm = [];
for ($i = 0; $i < $M; $i++) {
    $mm[] = trim(fgets(STDIN));
}
// var_dump($mm);
$cnt = 0;
foreach ($ss as $s) {
    if (in_array($s,$mm)) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
