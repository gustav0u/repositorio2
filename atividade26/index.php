<?php
    $array1 = array(1,2,3,4);
    $array2 = array(5,6,7);
    echo funcao($array1, $array2);
    function funcao($um, $dois){
        $resul = array_merge($um, $dois);
        $apresentar = "";
        for ($i=0; $i < count($resul) ; $i++) {    
            $apresentar .= $resul[$i];
        }
        return $apresentar;
    }


?>