<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function convertToLowercase($array) {
        $result = array();
        foreach ($array as $element) {
            if (is_string($element)) {
                $result[] = strtolower($element);
            } else {
                $result[] = $element;
            }
        }
        return $result;
    }
    
    // Áp dụng với các mảng
    $arr1 = ['a', 'b', 'ABC'];
    $arr2 = ['1', 'b', 'c', 'd'];
    $arr3 = ['a', 0, null, false];
    
    $result1 = convertToLowercase($arr1);
    $result2 = convertToLowercase($arr2);
    $result3 = convertToLowercase($arr3);
    
    // In kết quả
    echo "Kết quả mảng 1: \n";
    print_r($result1);
    
    echo "Kết quả mảng 2: \n";
    print_r($result2);
    
    echo "Kết quả mảng 3: \n";
    print_r($result3);
    
    ?>
</body>
</html>