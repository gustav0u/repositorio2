<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num" id="num">
        <input type="submit" value="enviar">
    </form>
    <?php

    $num = isset($_POST['num']) ? $_POST['num']: 0;
    //echo $num;
    num($num);
    function num($num){
        
        for ($i=1; $i <= $num ; $i++) { 
        
            for ($l=1; $l <= $i; $l++) { 
                echo $l;
            }
            echo "<br>";
        }
    }
?>
</body>
</html>