<?php

[$L1,$R1,$L2,$R2] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo max(0, min($R1, $R2) - max($L1, $L2)) . PHP_EOL;
