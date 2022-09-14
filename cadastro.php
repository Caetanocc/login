<?php session_start() ;
    include("alerta.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="estilo.css" rel="stylesheet">
    <link href="bulma.min.css" rel="stylesheet">

</head>
<body>

<div class="container has-text-centered" id="principal">
<h3 class="title"> Sistema Login Etec</h3>
<h4 class="title"> Criar novo usuário</h4>

     <?php
      mostraAlerta("danger");
      mostraAlerta("success");
      ?>

      <form action="salvar.php" method="POST"  >
      
      Nome <input required class="input is-success" id="nome" 
      name="nome"
      type="text" placeholder="Informe seu Nome" /> <br />
      CPF <input required class="input is-success" id="cpf" 
      name="cpf"
      type="text" placeholder="Informe CPF" /> <br />
      Data Nascimento <input required class="input is-success" id="dtnasc" 
      name="dtnasc"
      type="date" placeholder="Informe e-mail" /> <br />
      E-mail <input required class="input is-success" id="email" 
      name="email"
      type="email" placeholder="Informe e-mail" /> <br />
      Senha  <input required class="input is-success" id="senha1" 
      name="senha1" type="password"       
      title="Senha deve conter ao menos uma letra minuscula" /> <br />
      Confirmar Senha  <input required class="input is-success" id="senha2" 
      name="senha2" type="password"       
      title="Senha deve conter ao menos uma letra minuscula" /> <br />
      <br />
      <!-- pattern="^(?=.*[a-z]).$" -->
        <button id="btnSalvar" type="submit" value="Submit" class="button" >Salvar</button>
      </form>


    
</body>
</html>