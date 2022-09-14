<?php session_start() ;
    include("alerta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="estilo.css" rel="stylesheet">
    <link href="bulma.min.css" rel="stylesheet">

  </head>
  <body>

    <div class="container has-text-centered" id="principal">
      <h3 class="title"> Sistema Login Etec</h3>

      <?php
      mostraAlerta("danger");
      mostraAlerta("success");
      ?>

      <form action="login.php" method="POST"  >
      E-mail <input required class="input is-success" id="email" 
      name="email"
      type="email" placeholder="Informe e-mail" /> <br />
      Senha  <input required class="input is-success" id="senha" 
      name="senha" type="password"       
      title="Senha deve conter ao menos uma letra minuscula" /> <br />
      <br />
      <!-- pattern="^(?=.*[a-z]).$" -->
        <button id="btnEntrar" type="submit" value="Submit" class="button" disabled>Entrar</button>
      </form>

      <form action="cadastro.php"> 

      <button id="btnCadastar" type="submit" value="Submit" class="button" >Novo Usuário</button>

      </form>
    </div>


  </body>
  <script src="app.js"></script>
</html>
