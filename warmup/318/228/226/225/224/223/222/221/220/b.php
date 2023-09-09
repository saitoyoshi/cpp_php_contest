<?php

[$A,$B,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$X = (int) ($B/$C);
$Y = $X * $C;//$Yは$B以下で最大の$Cの倍数
if ($Y >= $A) {
    echo $Y . PHP_EOL;
} else {
    echo -1 . PHP_EOL;
}
