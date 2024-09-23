<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
function mysort($array) {
    $norm_array = [];
    for ($i = 0; $i < strlen($array); $i++) {
        if ($array[$i] != ',' && $array[$i] == (int)$array[$i]) {
            $norm_array[] = (int)$array[$i];
        } 
    }
    for ($i = 0; $i < count($norm_array); $i++) {
        $j = $i - 1;
        while ($j >= 0 && $norm_array[$j] > $norm_array[$j + 1]) {
            $temp = $norm_array[$j];
            $norm_array[$j] = $norm_array[$j + 1];
            $norm_array[$j + 1] = $temp;
            $j--;
        }
    }
    for ($i = 0; $i < count($norm_array) - 1; $i++) {
        echo $norm_array[$i], ", ";
    }
    echo $norm_array[count($norm_array) - 2];
}
?>
</body>
</html>