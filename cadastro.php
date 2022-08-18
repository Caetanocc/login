<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bulma.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <form accept-charset="UTF-8" action="login.php" autocomplete="off" method="POST" >
        <p>   E-mail: <input class="input is-success" id="email" name="email" type="email"    required /> 
        <br/> 
        Senha:  <input class="input is-success" id="senha1" name="senha1" type="password" required 
        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{3,}$"
        title="Senha deve ter ao menos 1 maiúscula, 1 minúscula e 1 caracter especial"/> 

        Confirmar Senha:  <input class="input is-success" id="senha2" name="senha2" type="password" required 
        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{3,}$"
        title="Senha deve ter ao menos 1 maiúscula, 1 minúscula e 1 caracter especial"/> 

        <br /><br /> 
        <button class="button" type="submit" disabled id="btnEntrar">Entrar</button></p>
    </form>



</body>
</html>