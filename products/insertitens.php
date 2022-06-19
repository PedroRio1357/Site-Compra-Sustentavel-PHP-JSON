<?php
$itens = filter_input_array(INPUT_POST,FILTER_DEFAULT);

if($itens){
    // Verificar se nome e email foram informados e se o email é válido...
    //var_dump($user);
    $arrayItens = array();
    // verifica se o json existe
    if(file_exists(__DIR__ . "/../data-json/data-itens.json")) {
        $stringItens = file_get_contents( __DIR__ . "/../data-json/data-itens.json");
        $arrayItens = json_decode($stringItens, true);
    }
    $arrayItens[] = $itens;
    $itensJson = json_encode($arrayItens);
    //var_dump($usersJson);
    $file = fopen( __DIR__ . "/../data-json/data-itens.json","w+");
    fwrite($file, $itensJson);
    fclose($file);
    echo json_encode($itens);

}