<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="arg" id="arg">
    </form>
    <?php
    $arg = isset($_POST["arg"]) ? $_POST["arg"]: 0;
    seis("APROVADO" , "REPROVADO");
    echo $arg;
    function seis($apr , $rep){
        if ($GLOBALS["arg"] < 6) {
          $GLOBALS["arg"] = $rep;  
        } elseif ($GLOBALS["arg"] >= 6) {
            $GLOBALS["arg"] = $apr;  
          } 
        return;

    }
    ?>
</body>
</html>