<?php
    $array=array(80, 100, "nome", "id", "class", 7);

    echo tabela($array);
    function tabela($array){
        $tabela = "<table border='$array[4]'>";
        for ($i=0; $i < $array[0] ; $i++) { 
            $tabela .="<tr>";
            for ($l=0; $l < $array[1]; $l++) { 
                $tabela .= "<td>".rand(1,100)."</td>";
            }
            $tabela .="</tr>";
        }
        //$tabela = $tabela."</table>";
        $tabela .= "</table>";
        return $tabela;
    }

?>