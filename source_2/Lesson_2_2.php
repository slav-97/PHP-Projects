<?php
    $x = 11;
    echo $x;
    echo '<br />';
    echo PHP_INT_MAX;
    $y = $x;
    echo '<br />';
    echo $y;
    echo '<br />';
    
    $x = 0b101;
    echo $x;
    echo '<br />';
    
    $z;
    // echo $z; // Ошибка
    $z = 27;
    echo $z;
    echo '<br />';
    $z = 17;
    echo $z;
    echo '<br />';
    
    $d_1 = 1.7;
    $d_2 = 3.5e5;
    $d_3 = 3.5e-5;
    echo "d_1 = $d_1; d_2 = $d_2; d_3 = $d_3<br />";
    
    $s = 'My string';
    $z = 'New String';
    echo "$s<br />$z<br />";
    
    $b_0 = false;
    $b_1 = true;
    echo "b_0 = $b_0; b_1 = $b_1<br />";
    
    $obj = null;
    echo "obj = $obj";
    
    /* Array, Object, Resource, Callable будут рассмотрены позже */
?>