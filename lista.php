<?php 
require "conexao.php";
require "telaLista.php";


$sql = "UPDATE cadastro SET nome = :nome WHERE id = :id";



$result = $pdo->query($sql);
?>