<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Numero: <input type="text" name="num" id="num"> <br>
        <input type="submit" value="ok"> <br>
        <?php
            $num = isset($_POST['num']) ? ($_POST['num']): 0;
            //echo $num;
            fatorar($num);
            function fatorar($num){
                echo "$num! = ";
                $fator = 1;
                for ($i=$num; $i > 0 ; $i--) { 
                    echo "$num";
                    $fator = $num * $fator;
                    if ($num > 1) {
                        echo " * ";
                    } else {
                        echo " = $fator ";
                    } 
                    $num--;
                } 
                
            }

        ?>
    </form>
</body>
</html>