<?php

while (fscanf(STDIN, "%[ -~]", $name)) {
    fprintf(STDOUT, "Thank you, %s, and farewell!\n", $name);
}
