<?php
fscanf(STDIN,"%d%d",$N,$M);
$a = explode(" ",trim(fgets(STDIN)));
$b = array_flip(explode(" ",trim(fgets(STDIN))));

for($i=0;$i<$N;++$i) $ans[] = isset($b[$a[$i]]) ? "Yes" : "No";

echo implode(PHP_EOL,$ans) . PHP_EOL;

?>
