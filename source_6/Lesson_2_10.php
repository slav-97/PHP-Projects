<?php
    $x = 5;
    if ($x < 15) echo 'x меньше 15';
    else echo 'x больше 15';
    echo '<br />';
    if ($x < 5) echo 'x меньше 5';
    elseif ($x > 5) echo 'x больше 5';
    else echo 'x равен 5';
    echo '<br />';
    
    $a = 4;
    $b = 1;
    if ($a > $b or $b == 3) echo 'Истина';
    else echo 'Ложь';
    
    //$op = 'mult';
    if (isset($_GET['op'])) $op = $_GET['op'];
    else $op = false;
    //echo $op;
    
    $op = isset($_GET['op'])? $_GET['op'] : false;
    
    $op = $_GET['op']?? false;
    
    echo '<br />';
    if ($op == 'add') {
        $summa = $a + $b;
        echo "$a + $b = $summa";
    }
    elseif ($op == 'mult') {
        $mult = $a * $b;
        echo "$a * $b = $mult";
    }
    elseif ($op) echo 'Неизвестная операция!';
    //else echo 'Операция не задана!';
    
    $z = 0;
    
    $result = ($z > 5)? 'z больше 5' : 'z меньше, либо равен 5';
    echo $result;
?>
<?php if (!$op) { ?>
    <div>
        <a href="?op=add">Сложить</a>
        <a href="?op=mult">Перемножить</a>
    </div>
<?php } else { ?>
    <p>Спасибо!</p>
<?php } ?>

<?php if ($z > 0): ?>
    <p>z</p>
    <p>больше 0</p>
<?php elseif ($z < 0): ?>
    <p>z</p>
    <p>меньше 0</p>
<?php else: ?>
    <p>z</p>
    <p>равен 0</p>
<?php endif; ?>
<p>Конец условий</p>