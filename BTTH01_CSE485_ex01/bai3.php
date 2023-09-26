<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php 
        $arr = ['PHP','HTML','CSS','CS'];

        echo '<table border="1">';
        echo '<tr><th>Tên khóa học</th></tr>';

        foreach ($arr as $ky_tu_single) {
            echo '<tr><td>' . $ky_tu_single . '</td></tr>';
        }

        echo '</table>';
    ?>
        
    
</body>
</html>