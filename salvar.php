<?php
    session_start();
    include("conecta.php");

    $email   = $_POST["email"];
    $nome    = $_POST["nome"];
    $cpf     = $_POST["cpf"];
    $dtnasc  = $_POST["dtnasc"];
    $senha1  = $_POST["senha1"];
    $senha2  = $_POST["senha2"];

    if ($senha1 != $senha2) {
        echo "As senhas devem ser iguais!";
    }

    $salvar =
    "INSERT INTO `usuario` 
    (`email`, `senha`, `nome`, `dtnasc`, `cpf`) 
    VALUES 
    ( '$email', md5('$senha1'), '$nome', '$dtnasc', '$cpf')";

    $resultado = mysqli_query($conexao, $salvar);

    if ($resultado) {
        $_SESSION["success"] = "Usuário inserido com sucesso!";
        header("Location: index.php");
    } else {
        $_SESSION["danger"] = "Erro ao Salvar usuário!";
        header("Location: index.php");
    }




