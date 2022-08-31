<?php
    $hello = function($string)
    {
        echo "$string<br />";
    };
    
    $hello('World');
    echo gettype($hello);
    echo '<br />';
    
    function test($a, $func) {
        $arr = [];
        for ($i = 0; $i <= $a; $i++) {
            $arr[] = $func($i);
        }
        return $arr;
    }
    
    $arr = test(5, function($x) {
        return $x ** 2;
    });
    foreach ($arr as $v) echo "$v ";
    echo '<br />';
    
    $arr = test(5, function($x) {
        return $x + 1;
    });
    foreach ($arr as $v) echo "$v ";
    echo '<br />';
    
    function sum($arr, $condition = false) {
        $sum = 0;
        foreach ($arr as $value) {
            if (!$condition || $condition($value)) $sum += $value;
        }
        return $sum;
    }
    
    $isPositive = function($value) {
        return $value > 0;
    };
    
    $isNegative = function($value) {
        return $value < 0;
    };
    
    $arr = [2, 3, -5, -7, 5];
    echo sum($arr).'<br />';
    echo sum($arr, $isPositive).'<br />';
    echo sum($arr, $isNegative).'<br />';
?>