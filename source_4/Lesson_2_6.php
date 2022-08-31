<?php
    $x = 5;
    $y = 3;
    $z = $x + $y;
    echo "x = $x; y = $y<br />";
    echo "Сумма x и y равна $z";
    echo '<br />Разность x и y равна ';
    echo $x - $y;
    echo '<br />Произведение x и y равно '.$x * $y;
    echo '<br />Результат деления x на y равен '.$x / $y;
    echo '<br />Остаток от деления x на y равен '.$x % $y;
    echo '<br />x в степени y '.$x ** $y;
    echo '<br />Квадратный корень из x равне '.$x ** 0.5;
    
    $x = $x + 1;
    echo "<br />x = $x";
    $y = $y - 1;
    echo "<br />y = $y";
    
    $x++; // $x = $x + 1;
    echo "<br />x = $x";
    $y--;
    echo "<br />y = $y";
    
    $y += 10; // $y = $y + 10;
    echo "<br />y = $y";
    
    $y *= 3; // $y = $y * 3;
    echo "<br />y = $y";
    
    $y = 5;
    $a = $x + $x * $y;
    echo "<br />a = $a";
    $a = ($x + $x) * $y;
    echo "<br />a = $a";
?>