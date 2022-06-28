<?php

$bdhHost= 'Localhost';
$bdUsername= 'root';
$password= '';
$dbName= 'db_sistema';

$conexao = new mysqli($bdhHost,$bdUsername,$password,$dbName);

// if($conexao->connect_errno){
//     echo "Erro";
// }
// else{
//     echo "mano deu certo";
// }
?>


