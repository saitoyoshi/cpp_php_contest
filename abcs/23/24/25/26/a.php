<?php

// N(1+1/2+1/3+...1/N)
$N = (int) fgets(STDIN);
$result = 0.0;
for ($i = 1; $i <= $N; $i++) {
    $result += 1.0 / $i;
}
printf("%.12lf\n", $result * $N);
