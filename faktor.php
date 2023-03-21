<?php

while (fscanf(STDIN, "%d %d", $a, $i)) {
    fprintf(STDOUT, "%d", $a * ($i - 1) + 1);
}
