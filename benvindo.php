<?php     session_start(); ?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="estilos.css" rel="stylesheet">
    <link href="bulma.min.css" rel="stylesheet">
    <link href="snackbar.css" rel="stylesheet">

    <title>Benvindo!</title>
</head>
<body>

<section class="hero  is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">

            <h2> Olá, <?php echo $_SESSION["usuario"];  ?> 
            <a href="logout.php"> Sair</a></h2>

            <table id="main" class="table">
            <tr><td> 
                        <button class="botao" type="submit"  id="btnSortear">Sortear</button></p>
                </td>

            </tr>
                <tr>
                <td>
                <div id="lista"></div>
                </td> 
                <td>
                <div id="sorteados"></div>
                </td>
                    
                </tr>
            </table>    
            <div id="snackbar"></div>
        </div>

    </div>
</section>

</body>
<script src="sorteio.js"> </script>
</html>