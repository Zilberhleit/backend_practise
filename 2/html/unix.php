<!DOCTYPE html>
<html>
<head>
<title>Unix</title>
<meta charset="utf-8"/>
</head>
<body>
<h1>Unix</h1>
<form action="unix.php" method="POST">
    <input type="text" name="command"/> 
    <input type="submit" value="Отправить"/>
</form>
<?php
include "unix_server.php";
if (isset($_POST["command"])){
    $command = $_POST["command"];
    echo "Вывод: ";
    ubluentu($command);
}
?>
</body>
</html>