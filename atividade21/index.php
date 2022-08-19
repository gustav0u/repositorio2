<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Linhas: <input type="text" name="linha" id="linha"> <br>
        Colunas: <input type="text" name="coluna" id="coluna"> <br>
        <input type="submit" value="ok"> <br>
        <?php
            $lin = isset($_POST['linha']) ? ($_POST['linha']): 0;
            $col = isset($_POST['coluna']) ? ($_POST['coluna']): 0;
            //echo "$lin $col";
            tabela($lin, $col);
            function tabela($lin, $col){
                $x = 1;
                echo "<table border='1'>";
            for ($l=0; $l < $lin ; $l++) { 
                echo "<tr>";
                for ($i=1; $i <= $col ; $i++) { 
                    echo "<td>$x</td>";
                    $x++;
                }
               echo  "</tr>";
            } echo "</table>";
        }
        ?>

    </form>
</body>
</html>