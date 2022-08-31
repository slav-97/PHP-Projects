<?php
$cookie_name = "user";
$cookie_value = "cookie_user";
setcookie($cookie_name, $cookie_value, 86400)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "cookie named $cookie_name";
    echo "cookie value $cookie_value";
}

?>
</body>
</head>
</html>