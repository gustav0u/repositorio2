<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Num: <input type="text" name="num" id=""> <br>
        <input type="submit" value="ok"> <br>
        <?php
            $num = isset($_POST['num']) ? $_POST['num']: 0;
            echo div($num);
            function div($num){
                $array = array();
                $apresentar = "";
                for ($i=1; $i <= $num ; $i++) { 
                    if ($num % $i==0) {
                        array_push($array,$i);
                    } 
                }
                for ($l=0; $l < count($array) ; $l++) { 
                    $apresentar .= $array[$l]."<br>";
                } return $apresentar;
                                  
            }
        ?>
    </form>
</body>
</html>