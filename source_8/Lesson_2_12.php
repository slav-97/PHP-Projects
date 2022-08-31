<?php
    $i = 0;
    while ($i < 5) {
        echo "$i<br />";
        $i++;
    }
    
    for ($i = 0; $i < 5; $i++) echo "$i<br />";
    
    echo '-----------------<br />';
    $i = 0;
    while (++$i < 5) echo "$i<br />";
    
    echo '-----------------<br />';
    $i = 0;
    while ($i++ < 5) echo "$i<br />";
   
    echo '-----------------<br />';
    $summa = 0;
    $n = 10;
    $i = 1;
    while ($i <= $n) {
        $summa += $i;
        $i++;
    }
    echo "Сумма чисел от 1 до $n равна $summa<br />";
    
    echo '-----------------<br />';
    $x = 0;
    do {
        echo $x;
    } while ($x > 10);
    
    echo '<br />-----------------<br />';
    $i = 0;
    while ($i < 10):
        $i++;
        if ($i == 3) continue;
        elseif ($i == 5) break;
        echo "$i<br />";
    endwhile;
    
    echo '-----------------<br />';
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo "($i, $j); ";
        }
        echo '<br />';
    }
?>