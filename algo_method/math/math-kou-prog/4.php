<?php

[$N,$A] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo ceil($N/$A) . PHP_EOL;
