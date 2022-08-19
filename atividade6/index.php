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
    $num = explode(":",$_POST["num"]);
    //var_dump($num);
    $return = hora($num);
    echo "$return";
    function hora($num){
        if ($num[0] == 24) {
            echo "00:00 AM";
        } elseif ($num[0] > 24 || $num[0] < 0 || $num[1] > 59 || $num[1] <0  ) {
            echo "00:00 ER";
        }
        elseif ($num[0]== 12) {
            echo "12:$num[1] PM";
        }
        elseif ($num[0] > 12){
            $valor=$num[0]-12;
            echo "$valor:$num[1] PM";
        
        }  else{
            echo "$num[0]:$num[1] AM";
    }
}
        
        
    
?>
</body>
</html>