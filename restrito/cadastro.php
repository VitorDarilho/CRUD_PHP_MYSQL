<?php include "../validar.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title> Cadastro </title>
</head>

 <body>
    <div class = "container">
    <div class= "row">
    <div class= "col">
    
    <h1>Cadastro</h1>  
    
<form action = "cadastro_script.php" method="POST">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" name="nome" required>
    </div>

    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" name="endereco">
    </div>
    
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data Nascimento</label>
        <input type="date" class="form-control" name="data_nascimento">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>

</form>
    <a href="index.php" class="btn btn-info">Voltar para o Início</a>
</div>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>