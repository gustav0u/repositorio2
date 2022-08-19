<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="palavra" id="palavra">
    </form>
    <?php
        $palavra = isset($_POST["palavra"]) ? $_POST["palavra"]: "";
        palavra($_POST["palavra"]);
        function palavra($pal){
            echo strlen($pal);

        }

    ?>
</body>
</html>