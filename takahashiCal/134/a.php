<?php

[$N,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));

// i-d~i+dなので、2d+1の範囲がカバーできる
echo ceil($N / (2*$D+1))  . PHP_EOL;
