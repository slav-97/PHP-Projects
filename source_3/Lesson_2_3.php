<?php  
    /*
        1 МБ = 1024 КБ
        1 КБ = 1024 Б
    */
    
    $A = 3;
    $b = 6;
    echo isset($a);
    echo '<br />';
    echo isset($b);
    
    $x = 12;
    echo '<br />';
    echo gettype($x);
    
    $x = (float) $x; // Аналог double
    echo '<br />';
    echo gettype($x);
    
    $str = 'My string';
    echo '<br />Переменная str - это string? : ';
    echo is_string($str);
    echo is_string($x);
    echo is_int($x);
    echo is_float($x);
    echo is_bool($x);
    
    echo '<br />';
    echo ((int) $str);
    echo '<br />';
    $str_number = '970';
    echo ((int) $str_number);
    echo '<br />';
    echo gettype($str_number);
    echo '<br />';
    echo is_numeric($str_number);
    
    echo '<br />';
    echo isset($x);
    echo '<br />';
    unset($x);
    echo 'Переменная существует? : ';
    echo isset($x);
?>