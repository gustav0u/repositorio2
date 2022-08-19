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

            seq($num);
            function seq($num){
                $mais = 1;
                $num2 = $num;
                echo "S = ";
                for ($i=1; $i <= $num ; $i++) { 
                    echo "($i/$mais)";
                    $mais = $mais + 2;
                    $num2++;
                    if ($i<$num) {
                        echo " + ";
                    }        
                }
            }
        ?>
    </form>
</body>
</html>