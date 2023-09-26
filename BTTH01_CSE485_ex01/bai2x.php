<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$arrs = ['đỏ' , 'xanh', 'cam', 'trắng'];
$vanban = "Màu đỏ là màu yêu thích của Anh, còn Màu xanh là màu yêu thích của Sơn, còn Màu cam là màu yêu thích của Thắng, còn Màu trắng là màu yêu thích của tôi, màu yêu thích của tôi là màu trắng";

foreach ($arrs as $mau) {
    $vanban = str_replace("Màu $mau", $mau, $vanban);
}

echo $vanban;
?>

    

</body>
</html>