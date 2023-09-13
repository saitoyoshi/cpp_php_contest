<?php

[$M,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo ceil($M/$K) . PHP_EOL;
