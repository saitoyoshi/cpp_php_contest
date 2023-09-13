<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo floor($A/$B) . PHP_EOL;
