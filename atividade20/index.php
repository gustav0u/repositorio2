<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        a1: <input type="text" name="a1" id="a1"> <br>
        r: <input type="text" name="r" id="r"> <br>
        q: <input type="text" name="q" id="q"> <br>
        progressão: <select name="prog" id="prog">
            <option value="pa">pa</option> 
            <option value="pg">pg</option>
        </select> <br>
        <input type="submit" value="ok"> <br>

        <?php
            $a1 = isset($_POST['a1']) ? ($_POST['a1']): 0;
            $r = isset($_POST['r']) ? ($_POST['r']): 0;
            $q = isset($_POST['q']) ? ($_POST['q']): 0;
            $prog = isset($_POST['prog']) ? ($_POST['prog']): 0;
            //echo "$a1 $r $q $prog";
            echo progr($a1,$r,$q,$prog);
            function progr($a1,$r,$q,$prog){
            if ($prog == "pa") {
                $array = array();
                $pa = $a1;
                echo "<h2> Progressão Aritmétrica</h2>";
                $apresentar = "";
                for ($i=0; $i < $q ; $i++) {
                    $pa = $a1 + $r;
                    array_push($array,$a1);
                    $apresentar .= $array[$i]."<br>";
                    $a1 = $pa;  
                } return $apresentar;
            }     elseif($prog == "pg") {
                $array = array();
                $pg = $a1;
                $apresentar = "";
                echo "<h2> Progressão Geométrica</h2>";
                for ($i=0; $i < $q ; $i++) {
                    $pg = $a1 * $r;
                    array_push($array,$a1);
                    $a1 = $pg;
                    $apresentar .= $array[$i]."<br>";
                } return $apresentar;
            }      
        }     
        ?>
    </form>
</body>
</html>