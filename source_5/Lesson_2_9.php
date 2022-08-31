<?php
    $b_1 = true;
    $b_2 = false;
    echo "b_1 = $b_1; b_2 = $b_2<br />";
    echo 'Отрицание b_2: '.!$b_2.'<br />';
    echo 'b_1 ИЛИ b_2: '.($b_1 || $b_2).'<br />';
    echo 'b_1 ИЛИ b_2: '.($b_1 or $b_2).'<br />';
    echo 'b_1 И b_2: '.($b_1 && $b_2).'<br />';
    echo 'b_1 И b_2: '.($b_1 and $b_2).'<br />';
    echo 'b_1 ИСКЛЮЧАЮЩЕЕ ИЛИ b_2: '.($b_1 xor $b_2).'<br />';
    
    $x = 12;
    echo (!($b_1 && $b_2) xor (!$b_1 || $x < 5));
?>