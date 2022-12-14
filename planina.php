<?php

while (fscanf(STDIN, "%d", $i)) {
    $ans[0] = 2;
    for ($x = 0, $y = $ans[$x]; $x < 15; ++ $x) {
        $ans[$x + 1] = pow(($y + pow(2, $x)), 2);
        $y = ($y + pow(2, $x));
    }
    fprintf(STDOUT, "%d", $ans[$i]);
}

