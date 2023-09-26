<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = ['a' => ['b' => 0,'c' => 1],'b' => 
    ['e' => 2,'o' => ['b' => 3]]
       ];

       $valueB = $a['b']['o']['b'];
       echo "Giá trị có key 'b' là $valueB<br>";
       
       $valueC = $a['a']['c'];
        echo "Giá trị có key 'c' là $valueC<br>";

        $infoA = $a['a'];
        echo "Giá trị có key 'a' là: ";
        print_r($infoA);
        


    ?>
</body>
</html>