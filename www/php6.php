<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="php6.php" method="GET">

    <input type="number" placeholder="" name="num1">
    <input type="number" placeholder="" name="num2">


    <input type="submit">

    </form>

    Answer: 
    <?php 
        echo $_GET["num1"] + $_GET["num2"];
    ?>

</body>
</html>