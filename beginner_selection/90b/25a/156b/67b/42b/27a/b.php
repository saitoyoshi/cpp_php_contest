<?php

[$N,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
$result = 0;
$sum = 0;
// a1 + a2 + ... +an = x のときは、N
// a1+a2 + ... +ak k != N のk
