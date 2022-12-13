<?php

while (fscanf(STDIN, "%f", $i)) {
    fprintf(STDOUT, "%d\n", round($i * 1000 * 5280 / 4854));
}

