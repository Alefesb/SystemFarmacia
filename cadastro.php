<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        margin-left: 10%;
    }
    h1{
        margin-left: 20%;
    }
</style>
<body>
    <h1>
        Cadastro de Medicamentos
    </h1>
<form method="post" action="processa_dados.php" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome do medicamento</label>
    <input name="medicamento" type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Nome do medicamento" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Preço do medicamento</label>
    <input name="Preço" type="text" class="form-control" id="validationCustom02" name="preço" placeholder="Preço" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Quantidade de medicamentos</label>
    <input name="Preço" type="text" class="form-control" id="validationCustom02" name="qtd" placeholder="Preço" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Categoria do medicamento</label>
    <div class="input-group has-validation">
      
      
      <select name="cat" id="" name="cat" required>
        <option value="">Analgésico</option>
        <option value="">Antibiótico</option>
        <option value="">Anti-inflamatório</option>
      </select>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Data de Validade</label>
    <input type="date" class="form-select" id="validationCustom04" name="data" required>
      
    <in/>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concorda com os termos?
      </label>
      <div class="invalid-feedback">
       Marque a opção
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div>
</form>

</body>

<?php 

$nome = $_POST["nome"];
$preço = $_POST["preço"];
$categoria = $_POST["cat"];
$data= $_POST["data"];


?>
</html>