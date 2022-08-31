<?php
    /* Жёсткие ссылки */
    $a = 4;
    $b =& $a;
    $a = 6;
    echo $b;
    echo '<br />';
    $b = 5;
    echo $a;
    unset($a);
    echo '<br />';
    echo $b;
    
    /* Символические ссылки */
    $a = 2;
    $b = 'a';
    echo '<br />';
    echo $$b;
    $$b = 4;
    echo '<br />';
    echo $a;
    
    /* Ссылки на объекты будут рассмотрены позже */
?>