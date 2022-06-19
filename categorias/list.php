<?php
$cat = filter_input(INPUT_GET, "cat", FILTER_DEFAULT);

if(file_exists(__DIR__ . "/../data-json/data-itens.json")){
    $stringItens = file_get_contents(__DIR__ . "/../data-json/data-itens.json");

    $arrayItens = json_decode($stringItens,true);
    $arrayCat = array();
    foreach ($arrayItens as $item){
        if($item["categoria"] == $cat){
            $arrayCat[] = $item;
        }
    }
    if($arrayCat){
        $stringItens = json_encode($arrayCat);
        echo $stringItens; // já está em JSON
    }
}



