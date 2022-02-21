<?php

while (fscanf(STDIN, "%d %d", $r1, $s)) {
    fprintf(STDOUT, "%d\n", 2 * $s - $r1);
}
