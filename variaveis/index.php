<?php

$nome = "joaop";
echo $nome;
var_dump($nome); //ver tipo da variavel
$nome = $_GET['a']; //puxa as variaveis da web atraves do metodo GET;
$nome = (int)$_GET['a'];//ja declara a variavel com seu tipo;

$ip = $_SERVER["REMOTE_ADDR"];//criar uma variavel para obter o endereço ip do usuario;

$ip = $_SERVER["SCRIPT_NAME"];// criar uma variavel para saber em qual pagina o usuario estar;


// INCLUDE X REQUIRE;

//chamam os include e require apenas uma vez;
Require_once "nomeArquivo";
include_once "nomeArquivo";


?>