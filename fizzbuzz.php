<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "buzzfizz" . "\n";
    } elseif ($i % 5 === 0) {
        echo "buzz" . "\n";
    } elseif ($i % 3 === 0 ){
        echo "fizz" . "\n";
    } else {
        echo $i . "\n";
    }
}
