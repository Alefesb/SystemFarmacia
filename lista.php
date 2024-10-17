<?php 
require "conexao.php";
require "telaLista.php";


if ($pdo->connect_error) {
    die("Conexão falhou: " . $pdo->connect_error);
}

$sql = "SELECT * FROM cadastro";
$result = $pdo->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Nome"] . "</td>";
        echo "<td>" . $row["cat"] . "</td>";
        echo "<td>" . $row["Preço"] . "</td>";
        // Formatar a data de validade
        echo "<td>" . date('d/m/Y', strtotime($row["data"])) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum remédio encontrado.</td></tr>";
}
$pdo->close();
?>
