
<?php
require ("conexao.php");
require ("telaCadastro.php");


if ($pdo->connect_error) {
    die("Conexão falhou: " . $pdo->connect_error);
}

$nome = $_POST["Nome"];
$preço = $_POST["Preço"];
$categoria = $_POST["cat"];
$data = $_POST["data"];
$quantidade = $_POST["qtd"];


$sql = "INSERT INTO cadastro (nome, preço, qtd, cat, data) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->bind_param("sssss", $nome, $preço, $quantidade, $categoria, $data);


if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
    header("Location: telaLista.php");
    exit;
} else {
    echo "Erro ao inserir dados: " . $stmt->error;
}

$stmt->close();
$pdo->close();
?>
