<?php
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

//Exemplo de array printado:
//echo "Primeiro array em PHP";
//print_r ($categorias);

$nome = "Vitor";
$idade = 22;

//Informa o tipo de dado(String, int, etc...) e informa a quantidade:
//var_dump($nome);
//var_dump ($idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] === "infantil") {
            echo ' O nadador ' . $nome . ' É infantil';
        }
    }
} else if ($idade < 6) {
    echo "irmão tu é novo demais, volta quando tiver no mímino 6 anos";
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "adolescente") {
            echo ' O nadador ' . $nome . ' É adolescente';
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "adulto") {
            echo ' O nadador ' . $nome . ' É adulto';
        }
    }
}
