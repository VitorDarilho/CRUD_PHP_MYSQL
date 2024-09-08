<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="restrito/css/bootstrap.min.css">

    <title> EMPRESA </title>
</head>

<body>
    <div class = "container">
    <div class= "row">
        <div class= "col-3"></div>
        <div class= "col-6">
            <div class="jumbotron">
            <h1 class="display-4">Cadastro WEB - LOGIN</h1>

<form action="index.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control" name= "login">
    <small class="form-text text-muted">Entre com os seus dados de acesso.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Acessar</button>
  </form>
  <?php
    if(isset($_POST['login'])) {
      $login = $_POST['login'];
      $senha = md5($_POST['senha']);

      include "restrito/conexao.php";
      $sql = "SELECT * from `usuarios` WHERE login = '$login' AND senha = '$senha'";

      if ($result = mysqli_query($conn, $sql)){
        $num_registros = mysqli_num_rows($result);

        if($num_registros == 1) {
          $linha = mysqli_fetch_assoc($result);
  
          if(($login == $linha['login']) and ($senha == $linha['senha'])) {
            session_start();
            $_SESSION['login']= "VITOR";
            header("location: listagem");
          } if (($login == "admin")){
            session_start();
            $_SESSION['login']= "VITOR";
            header("location: restrito");
          }else {
            echo "Login inválido!";
          }
        }else {
          echo "Login ou senha não encontrados ou inválido.";
        }
      } else { echo "Nenhum resultado do banco";} 
      }
  ?>

</div>
</div> 
<div class= "col-3"></div>  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>