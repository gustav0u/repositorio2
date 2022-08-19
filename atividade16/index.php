<?php
        $array = array("a", "b", "c");
        echo "<select name='' id=''>";
        echo apresentar($array);
        echo "</select>";
        function apresentar($array){
                $apresentar = "";
                for ($i=0; $i < count($array) ; $i++) { 
                        $apresentar.= "<option value='$array[$i]'>$array[$i]</option>";
                }
            return $apresentar;
        }    
?>
