<!DOCTYPE html>
<html>
<head>
<title>Drawer</title>
<meta charset="utf-8" />
</head>
<body>
<?php
function server_drawer($num){
    if ($num == 1) {
        echo '<svg width="100" height="100">
            <rect width="80" height="40" stroke="black" fill="blue">
            </svg>';
    }
    elseif ($num == 2) {
        echo '<svg width="100" height="100">
        <circle cx="50" cy="50" r="40" stroke="black" fill="red">
        </svg>';
    }
    elseif ($num == 3) {
        echo '<svg width="100" height="100">
        <rect width="80" height="80" stroke="black" fill="green">
        </svg>';
    }
    elseif ($num == 4) {
        echo '<svg width="100" height="100">
        <polygon points="0,100 50,0 100,100" stroke="black" fill="yellow">
        </svg>';
    }
    elseif ($num == 5) {
        echo '<svg width="200" height="200">
        <ellipse cx="95" cy="50" rx="90" ry="40" stroke="black" fill="purple">
        </svg>';
    }
    else {
        echo "this tag hasn't work yet";
    }
}
?>
</body>
</html>