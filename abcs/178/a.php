<?php

// +同符号bd　-同符号ac,異符号
[$a,$b,$c,$d] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo max($a*$d,$a*$c,$b*$c,$b*$d) . PHP_EOL;
