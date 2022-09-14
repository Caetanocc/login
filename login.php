<?php
    session_start();
    include("conecta.php");

    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $consulta = "SELECT * FROM usuario 
                 WHERE email='$email' AND senha='$senha'";

    $resultado = mysqli_query($conexao, $consulta);
    $usuario = mysqli_fetch_assoc($resultado);

    if ( !$usuario == null) {
        $nome = $usuario["nome"];
        $_SESSION["usuario"] = $nome;
        header("Location: benvindo.php");
    } else {
        $_SESSION["danger"] = "email ou senha inválidos!";
        header("Location: index.php");
    }

