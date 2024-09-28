<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
function mysort($array) {
    $norm_array = [];
    $norm_array = array_map('intval', explode(',', $array));
    //Сортировка вставками
    for ($i = 0; $i < count($norm_array); $i++) {
        $x = $norm_array[$i];
        for ($j = $i - 1; $j >= 0 && $norm_array[$j] > $x; $j--) {
            $norm_array[$j + 1] = $norm_array[$j];
        }
        $norm_array[$j + 1] = $x;
    }
    for ($i = 0; $i < count($norm_array) - 1; $i++) {
        echo $norm_array[$i], ", ";
    }
    echo $norm_array[count($norm_array) - 1];
}
?>
</body>
</html>