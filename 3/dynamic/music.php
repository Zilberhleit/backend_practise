<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr><th>Id</th><th>Title</th><th>Timelong</th></tr>
    <?php
    $music = new mysqli("db", "user", "password", "appDB");
    $result = $music->query("SELECT * FROM music");
    foreach ($result as $row) {
        echo "<tr><td>{$row['ID']}</td><td>{$row['title']}</td><td>{$row['timelong']}</td></tr>";
    }
    ?>
    </table>
</body>
</html>