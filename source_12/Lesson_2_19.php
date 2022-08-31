<?php
    function factorial($n) {
        if ($n <= 1) return 1;
        return $n * factorial($n - 1);
    }
    
    echo factorial(5).'<br />';
    
    $fact = 1;
    for ($i = 1; $i <= 5; $i++) $fact *= $i;
    
    echo $fact.'<br />';
    
    //0 1 1 2 3 5 8 13 21
    //5 2 7 9 16 25
    
    function fibonacci($count, $arr) {
        if (count($arr) < 2 || $count < 2) return $arr;
        $n_1 = $arr[count($arr) - 2];
        $n_2 = $arr[count($arr) - 1];
        $arr[] = $n_1 + $n_2;
        if (count($arr) == $count) return $arr;
        else return fibonacci($count, $arr);
    }
    
    $arr = fibonacci(10, [0, 1]);
    foreach ($arr as $value) echo "$value ";
?>