<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<body>
<?php
$_SESSION["favcolor"] = "red";
$_SESSION["favpage"] = "home";

echo $_SESSION["favcolor"];
echo $_SESSION["favpage"];
session_unset();
session_destroy();
?>
</body>
</head>
</html>