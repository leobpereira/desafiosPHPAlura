<?php

$i = 0;

for($i = 0; $i <= 100; $i ++) {
    if($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
    else {
        echo "Número par" . PHP_EOL;
    }
}