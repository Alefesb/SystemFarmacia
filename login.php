
<?php
require "conexao.php";



$pdo = new mysqli("localhost", "root","", "Farmacia");


if ($pdo->connect_error) {
    die("Conexão falhou: " . $pdo->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
$result = $pdo->query($sql);


if ($result->num_rows > 0) {
    
    header("Location: cadastro.php");
    exit;
} else {
  
    echo "Usuário ou senha inválidos.";
}

$pdo->close();
?>

</html>