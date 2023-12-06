<?php
    session_start();
    //print_r($_SESSION);
    if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oii amor!!</title>

    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, #e84040, #ce5656);
        text-align: center;
        color: white;
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 50%;
            text-align: left;
        }

        .presentes {
            color: blueviolet;
            text-decoration: none;
        }
        

    </style>

</head>
<body>
<div class="box">
        <h1 class="titulo">Olá Senhorita Gustmann!! Tudo bem?</h1>
        <br>
        <p>Você acabou de acessar o coração do Miguel Gutierrez.</p>
        <p>Dados comprovam que Miguel tem profundo amor por ti, e em seu coração, existem preciosos momentos compartilhados ao teu lado.</p>
        <p>Nós, responsáveis pelos sentimentos de Miguel, gostaríamos de presentea-la como forma de agradecimento!</p>

        <a class="presentes" href="presentes.php">Clique aqui para resgatar o seu presente!</a>
        <p>Ps: Miguel te ama infinito mais 1 ❤️</p>
    </div>
</body>
</html>