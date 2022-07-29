<?php

echo PHP_EOL . "-------- TABUADA --------" . PHP_EOL . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo "Tabuada do $i" . PHP_EOL;

    for ($num = 1; $num <= 10; $num++){
        echo "$i * $num = " . $i * $num . PHP_EOL;
    }

    echo PHP_EOL . "----------------" . PHP_EOL;
}