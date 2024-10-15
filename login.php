<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
    <label for="username">Nome de Usuário:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="senha" required>

    <button type="submit">Entrar</button>
</form>  
</body>



<?php
require "conexao.php";
// Conexão com o banco de dados (ajuste as informações)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmacia";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$username = $_POST['username'];
$senha = $_POST['senha'];

// Preparar e executar a consulta SQL
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Verificar se o usuário existe
if ($result->num_rows > 0) {
    // Usuário autenticado
    echo "Login bem-sucedido!";
} else {
    // Usuário não encontrado
    echo "Usuário ou senha inválidos.";
}

$conn->close();
?>

</html>