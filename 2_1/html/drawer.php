<!DOCTYPE html>
<html>
<head>
<title>Drawer</title>
<meta charset="utf-8" />
</head>
<body>
<h1>Drawer</h1>
<?php
    include "server_drawer.php";
    if (isset($_GET["num"])){
        $num = $_GET['num'];
        server_drawer($num);
    }
?>
</body>
</html>