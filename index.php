<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet">
    <link href="bulma.min.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>

<section class="is-fullheight">
    <div class="container has-text-centered">

        <h2 class="title"> Sistema de Login Etec</h2>

        <?php if (isset($_SESSION["invalido"])){?>
            <div class="notification is-danger">
                <p>Erro:  Usuário ou senha inválidos!</p>
            </div>
        <?php };
        unset($_SESSION["invalido"]);
        ?>

        <form accept-charset="UTF-8" action="login.php" autocomplete="off" method="POST" >
        <p>   E-mail: <input id="email" name="email" type="email"    required /> 
        <br/> Senha:  <input id="senha" name="senha" type="password" required 
        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{3,}$"/> 

        <br /><br /> 
        <button class="botao" type="submit" disabled id="btnEntrar">Entrar</button></p>
        </form>
    </div>

</section>

</body>
<script src="app.js"></script>
</html>
