<?php
    $array = array();
    for ($i=0; $i < rand(1, 499); $i++) { 
        array_push($array, rand(1, 10000));
    }
    foreach((ordenar($array, "crescente")) as $key => $value){
        echo $value."<br>";
    }
    function ordenar($array, $ordem){
        $ordem = strtolower($ordem);
        if ($ordem == "decrescente") {
            rsort($array);
        }else {
            sort($array);

        }
        return $array;
    }
?>