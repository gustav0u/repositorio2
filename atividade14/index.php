<?php
        foreach((aleatorio(1, 40, 5)) as $key => $value){
            echo $value."<br>";
        }
        function aleatorio($a,$b, $n){
            $array =array();
            if ($a < $b) {}else{
                $c = $a;
                $a = $b;
                $b = $c;
            }
            for ($i=0; $i < $n; $i++) { 
                array_push($array, rand($a, $b));
            }
            return $array;
        }
    ?>

</html>