<?php
$enderecoServidor = '127.0.0.1';
$nomeBanco = 'aluno';
$porta = '3306';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($enderecoServidor, $usuario, $senha, $nomeBanco, $porta);

// ! esclamação significa se o resultado da frente for verdadeiro ele inverte para falso,usado para inverter o resultado de um boolean
if (!$conexao){
    die('<h1>Erro ao conectar com o banco de dados!</h1>');
}