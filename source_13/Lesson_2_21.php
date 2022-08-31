<?php
    $a = 7;
    $b = 5;
    $test = function($c) use($a, $b) {
        echo "$a $b $c";
    };
    $test(3);
?>