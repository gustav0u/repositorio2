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
                $mais = $num + 1;
                $menos = 1;
                echo "S = ";
                for ($i=$num; $i >= 1 ; $i--) { 
                    echo "($num * $mais)/$menos";
                    if ($num > 1) {
                        echo " + ";
                    } 
                    $menos++;
                    $mais--;
                    $num--;
                }
            }
        ?>
    </form>
</body>
</html>