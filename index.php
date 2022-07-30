<?php
define("valorDia", "80");
define("gorjeta", "40");
echo valorDia + gorjeta;

//Trabalhando com datas:
date_default_timezone_set('America/Sao_Paulo');
echo date("  "."d/m/Y");
echo date(" ". "H:i:s");

//Criação de Array
$curso = array("Java", "PHP", "Mysql");
print_r($curso);

//Adicionando elemento dentro do array
$curso[] = "Variaveis em PHP";
print_r($curso);

$a = 20;
function divisao(){
    global $a;
    $contaDivisao = $a / 2;
    return $contaDivisao;
}

echo divisao();