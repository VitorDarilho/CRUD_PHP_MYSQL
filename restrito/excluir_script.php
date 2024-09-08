<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title> Exclusão de Cadastro </title>
</head>

 <body>
    <div class = "container">
     <div class= "row">
    <?php
        include "conexao.php";
        $id= $_POST['id'];
        $nome= $_POST['nome'];

    $sql = "DELETE from `pessoas` WHERE cod_pessoa = $id";
    
    if(mysqli_query($conn,$sql)){
        mensagem("$nome excluido com sucesso!", 'success');
    }else
        mensagem("$nome NÃO excluído!", 'danger');
    ?>
    
    <a href ="index.php" class="btn btn-primary">Voltar</a>
    
</div>   
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>