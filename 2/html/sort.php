<!DOCTYPE html>
<html>
<head>
<title>Sort</title>
<meta charset="utf-8"/>
</head>
<body>
<h1>Sort</h1>
<?php
include "server_sort.php";
if (isset($_GET["array"])) {
    $array = $_GET["array"];
    mysort($array);
}
?>
</body>
</html>