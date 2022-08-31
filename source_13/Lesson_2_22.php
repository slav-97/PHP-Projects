<?php
    $n_1 = 1;
    $n_2 = 3;
    
    $sum = function() use($n_1, $n_2) {
        return $n_1 + $n_2;
    };
    
    echo $sum().'<br />';
    
    $sum = fn() => $n_1 + $n_2;
    
    echo $sum().'<br />';
    
    function printArray($arr, $condition) {
        foreach ($arr as $key => $value) {
            if ($condition($key)) echo $value.' ';
        }
    }
    
    printArray([1, 3, 5, 7, 9, 0, 3], fn($index) => $index % 2 == 0);
    echo '<br />';
    printArray([1, 3, 5, 7, 9, 0, 3], fn($index) => $index % 2 != 0);
    echo '<br />';
    printArray([1, 3, 5, 7, 9, 0, 3], function($index) {
        return $index % 2 == 0;
    });
    
?>