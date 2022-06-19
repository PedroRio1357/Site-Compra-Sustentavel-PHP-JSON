<?php
if(file_exists(__DIR__ . "/../data-json/data-itens.json")){
    $stringItens = file_get_contents(__DIR__ . "/../data-json/data-itens.json");
    echo $stringItens; // já está em JSON
}