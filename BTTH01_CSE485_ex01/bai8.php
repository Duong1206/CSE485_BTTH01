<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    // Khởi tạo các biến để lưu trữ thông tin chuỗi lớn nhất và nhỏ nhất
    $maxLength = PHP_INT_MIN;
    $minLength = PHP_INT_MAX;
    $maxString = "";
    $minString = "";
    
    foreach ($array as $string) {
        $length = strlen($string);
    
        // Kiểm tra chuỗi có độ dài lớn hơn chuỗi lớn nhất hiện tại hay không
        if ($length > $maxLength) {
            $maxLength = $length;
            $maxString = $string;
        }
    
        // Kiểm tra chuỗi có độ dài nhỏ hơn chuỗi nhỏ nhất hiện tại hay không
        if ($length < $minLength) {
            $minLength = $length;
            $minString = $string;
        }
    }
    
    // In kết quả
    echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength<br>";
    echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength";
    
    ?>
</body>
</html>