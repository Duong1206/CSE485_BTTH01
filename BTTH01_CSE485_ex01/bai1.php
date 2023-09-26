<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function tinhToanMang($arr) {
    $tong = array_sum($arr); 
    $tich = array_product($arr); 
    $hieu = $arr[0] - array_sum(array_slice($arr, 1)); 
    $thuong = $arr[0];
    
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $thuong /= $arr[$i];
        } else {
            echo "Không thể chia cho 0.";
            return;
        }
    }

    echo "Tổng các phần tử = " . implode(" + ", $arr) . " = " . $tong . "<br>";
    echo "Tích các phần tử = " . implode(" * ", $arr) . " = " . $tich . "<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arr) . " = " . $hieu . "<br>";
    echo "Thương các phần tử = " . implode(" / ", $arr) . " = " . $thuong . "<br>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
tinhToanMang($arrs);

    ?>
</body>
</html>