<?php
    $nome = "array.json";
    jeison($nome);
    function jeison($nome_jeison){
    $fp = fopen($nome_jeison, "w");
    $mostrar = json_decode(file_get_contents("$nome_jeison"));
    array_push($mostrar, "lucas");
    foreach ($mostrar as $key => $value) {
    echo $value;
}    
}
?>