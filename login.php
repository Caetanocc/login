<?php
    session_start();
    include('conecta.php');

    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $consulta = "SELECT * FROM usuario WHERE email='$email' and senha='$senha'";

    $resultado = mysqli_query($conexao, $consulta);
    $usuario = mysqli_fetch_assoc($resultado);
    $qtdeLinhas = mysqli_num_rows($resultado);

    if ($qtdeLinhas == 1) {
        $nome= $usuario["nome"];
        $_SESSION["usuario"] = $nome;
        header("Location: benvindo.php");
    } else {
        $_SESSION["invalido"] = true;
        header("Location: index.php");
    }

?>