<?php
    $array = array("gustavo", "b", "c");
    $array = "array.json";
    jeison($array);
    function jeison($nome_jeison){
    $fp = fopen($nome_jeison, "r");
    $mostrar = json_decode(file_get_contents("$nome_jeison"));
    foreach ($mostrar as $key => $value) {
    echo $value;
  
}}
    
?>