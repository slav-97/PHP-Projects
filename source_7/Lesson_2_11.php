<?php
    for ($i = 0; $i < 3; $i++) echo 'Hello ';
    echo '<br />';
    for ($i = 10; $i >= 0; $i -= 2) echo "$i, ";
    echo '<br />';
    
    for (; $i < 10;) {
        $i++;
        echo $i;
        if ($i < 10) echo ', ';
    }
    
    for ($i = 0, $j = 1; $i * $j < 1000; $i++, $j *= 2) {
        echo "$i, $j<br />";
    }
    
    for ($i = 0; $i < 10; $i++) {
        if ($i == 3) continue;
        echo $i.'<br />';
        if ($i == 7) break;
    }
    
    echo '-----------------------<br />';
    $summa = 0;
    $n = 10;
    for ($i = 1; $i <= $n; $i++) {
        $summa += $i; // $summa = $summa + $i;
        echo $summa.'<br />';
    }
    echo "Сумма чисел от 1 до $n равна $summa";
?>
<div>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <a href="#">Ссылка <?=($i + 1)?></a>
        <br />
    <?php } ?>
</div>