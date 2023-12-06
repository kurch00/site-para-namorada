<?php

session_start();

    //$con = mysqli_connect('id','senha','nome');
    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
    {
        // ACESSAR O MEU SISTEMA

        include_once('config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // print_r('Nome: ' . $nome);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header('Location: saivagabunda.php');
        }
        else{
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }

    }
    else {
        // NÃO ACESSA O MEU SISTEMA

        header('Location: login.php');
    }
?>