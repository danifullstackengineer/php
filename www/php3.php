<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
        $str = "Giraffe Academy";
        echo strtolower($str);
        echo "<br>";
        echo strtoupper($str);
        echo "<br>";
        echo strlen($str);
        echo "<br>";
        echo $str[0];
        echo "<br>";
        echo $str[0] = "B";
        echo "<br>";
        echo str_replace("Giraffe" , "Panda", $str);
        echo "<br>";
        echo substr($str, 8, 3);
    ?>

</body>
</html>