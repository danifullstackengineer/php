<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="php5.php" method="GET">
        
        Name: <input placeholder="Type your name..." type="text" name="name">
        Age: <input placeholder="Type your age..." type="text" name="age">
        <input type="submit" value="SEND">
    </form>


    <?php
        echo $_GET["name"];
        echo $_GET['age'];
    ?>

</body>
</html>