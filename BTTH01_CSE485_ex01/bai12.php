<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $numbers = [
        'key1' => 12, 
        'key2' => 30, 
        'key3' => 4, 
        'key4' => -123, 
        'key5' => 1234, 
        'key6' => -12565, 
       ];
       
       // Lấy ra phần tử đầu tiên và phần tử cuối cùng
       $firstElement = reset($numbers);
       $lastElement = end($numbers);
       
       // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
       $maxValue = max($numbers);
       $minValue = min($numbers);
       $sum = array_sum($numbers);
       
       // Sắp xếp mảng theo chiều tăng giá trị
       asort($numbers);
       
       // Sắp xếp mảng theo chiều giảm giá trị
       arsort($numbers);
       
       // Sắp xếp mảng theo chiều tăng key
       ksort($numbers);
       
       // Sắp xếp mảng theo chiều giảm key
       krsort($numbers);
       
       // In kết quả
       echo "Phần tử đầu tiên: $firstElement<br>";
       echo "Phần tử cuối cùng: $lastElement<br>";
       echo "Số lớn nhất: $maxValue<br>";
       echo "Số nhỏ nhất: $minValue<br>";
       echo "Tổng các giá trị: $sum<br>";
       echo "Sắp xếp mảng theo chiều tăng giá trị:<br>";
       print_r($numbers);
       
    ?>
</body>
</html>