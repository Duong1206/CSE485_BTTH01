<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
        65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
        
        // Tính toán giá trị trung bình của mảng
        $average = array_sum($numbers) / count($numbers);
        
        echo "Giá trị trung bình: $average<br>";
        
        // Liệt kê các số lớn hơn giá trị trung bình
        echo "Các số lớn hơn giá trị trung bình:<br>";
        foreach ($numbers as $number) {
            if ($number > $average) {
                echo "$number ";
            }
        }
        echo "\n";
        
        // Liệt kê các số nhỏ hơn hoặc bằng giá trị trung bình
        echo "Các số nhỏ hơn hoặc bằng giá trị trung bình:<br>";
        foreach ($numbers as $number) {
            if ($number <= $average) {
                echo "$number ";
            }
        }
        echo "\n";
        
    ?>
</body>
</html>