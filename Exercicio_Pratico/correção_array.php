<?php

$lista = [
    'nome' => 'Fábio',
    'idade' => 29,
    'atributos' => [
        'força' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];
echo "Nome: ".$lista['nome'],"<br/>";
//Realizando o print Nome com item do array 'nome'

echo "Idade: ".$lista['idade'],"<br/>";

echo "Força: ".$lista['atributos']['força'],"<br/>";

echo "Agilidade: ".$lista['atributos']['agilidade'],"<br/>";
//Realizando o print Agilidade dentro do array 'atributos' buscamos 'agilidade'

echo "Destreza: ".$lista['atributos']['destreza'],"<br/>";

echo "Vida: ".$lista['vida'],"<br/>";

echo "Mana: ".$lista['mana'],"<br/>";
/*
Exercício - Consertar erro abaixo:
$lista = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'atributos' => [
        'força' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    vida = 1000
    mana = 928
];
*/
?>

