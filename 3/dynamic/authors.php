<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr><th>Id</th><th>Name</th><th>Year</th></tr>
    <?php
    $music = new mysqli("db", "user", "password", "appDB");
    $result = $music->query("SELECT * FROM music_authors");
    foreach ($result as $row) {
        echo "<tr><td>{$row['ID']}</td><td>{$row['name_']}</td><td>{$row['year_']}</td></tr>";
    }
    ?>
    </table>
</body>
</html>