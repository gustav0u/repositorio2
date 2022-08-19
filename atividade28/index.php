<?php
    $a = array(1,2,3,4,5,6);
    $b = array(3,4,6);
    echo funcao($a,$b);
    function funcao($a,$b){
        $c = "";
            $c = array_intersect($a,$b);
            $apresentar = "";
            foreach ($c as $value) {
                $apresentar .= $value;
            } return $apresentar;
    }
?>