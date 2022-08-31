<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<body>
//с get тоже самое
<form action ="" method ="post">
    <p>Ваше имя: <input type="text" name="name"/></p>
    <p>Ваш возраст: <input type="text" name="age"/></p>
    <p><input type="submit"/></p>
</form>
Привет <?php echo htmlspecialchars($_POST['name']);?>.
Вам <?php echo (int)($_POST['age']);?> лет.

<form action ="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method ="post">
      <fieldset>
          <legend>Выберите животное</legend>
          <label for="dog">
              <input type="checkbox" id="dog" name="animal[]" value="собака">
              Собака
          </label>
          <label for="cat">
              <input type="checkbox" id="cat" name="animal[]" value="cat">
              Cat
          </label>
          <label for="fox">
              <input type="checkbox" id="fox" name="animal[]" value="fox">
              Fox
          </label>
      </fieldset>
    <input type="submit" value="отправить">
</form>
<?php
//echo "Данные из адресной строки: {$_SERVER['QUERY_STRING']}";
$animal = isset($_POST['animal']) ? $_POST['animal'] : '';
if(!empty($animal)){
    echo '<br><br> Выбраны: ';
    foreach($animal as $a) {
        echo "<span style=\"color:green\">".htmlentities($a)."</span>";
    }
}
?>

</body>
</head>
</html>