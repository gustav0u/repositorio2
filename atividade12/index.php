<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        palabra: <input type="text" name="pal" id="pal">
    </form>
    <?php
        $pal = isset($_POST['pal']) ? $_POST['pal']: 0;
        //echo sha1($pal);
        echo palavra($pal);
        function palavra($pal){
           return sha1($pal);
        }

    ?>
</body>
</html>