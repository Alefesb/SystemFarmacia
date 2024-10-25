<?php 
require "conexao.php";

$sql = "SELECT * FROM cadastro ORDER BY id ASC";

$stmt = mysqli_prepare($pdo, $sql);


if ($stmt) {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
} else {
    
    $result = mysqli_query($conn, $sql); 
}
 
    

    
    
   
    






?>