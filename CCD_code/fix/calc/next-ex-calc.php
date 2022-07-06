<?php
    $seed = "lvl1.php?dir=code&file=";
    $exAddress = rand(1,5);
    if ($exAddress == 1) {
        echo($seed."exe1-1");
    } elseif ($exAddress == 2) {
        echo($seed."exe1-2");
    } elseif ($exAddress == 3) {
        echo($seed."exe1-3");
    } elseif ($exAddress == 4) {
        echo($seed."exe1-4");
    } elseif ($exAddress == 5) {
        echo($seed."exe1-5");
    };
?>