<?php
    session_start();

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($email == 'cc@gmail.com' && $senha == 'Aa1') {
        $nome="Claudiomiro";
        $_SESSION["usuario"] = $nome;
        header("Location: benvindo.php");
    } else {
        $_SESSION["invalido"] = true;
        header("Location: index.php");
    }

?>