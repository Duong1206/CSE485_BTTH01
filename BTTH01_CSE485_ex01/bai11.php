<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array(1, 2, 3, 4, 5);

        // Xóa phần tử thứ 3 (với index là 2)
        unset($array[2]);
        
        // Đảm bảo rằng các key là tuần tự
        $array = array_values($array);
        
        // In kết quả
        print_r($array);
        
    ?>
</body>
</html>