<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="lista.php">
  </head>
<body>
  <form method="post" action="lista.php">

  
  <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Validade</th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
            include 'lista.php';

            while($user_data = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>".$user_data['id']."</td>";
              echo "<td>".$user_data['nome']."</td>";
              echo "<td>".$user_data['preço']."</td>";
              echo "<td>".$user_data['cat']."</td>";
              echo "<td>".$user_data['validade']."</td>";
            }
             ?>
        </tbody>
    </table>
  
  </form>

</body>

</html>