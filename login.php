<?php
    if(isset($_POST['submit'])) 
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nas = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nas, cidade, estado, endereco) 
        VALUES ('$nome', '$email', '$telefone', '$genero', '$data_nas', '$cidade', '$estado', '$endereco')");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - Coração Do Miguel</title>

        <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, #e84040, #ce5656);
        text-align: center;
        color: white;
        }

        .img-miguel {
            padding: 15px;
            border-radius: 50%;
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
            width: 20%;
        }

        .coracao-miguel {
            text-align: center;
            font-size: 30px;
        }

        .input-box {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            top: 50px;
            left: 50px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        .submit {
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            text-decoration: none;  
        }
        .submit:hover {
            text-decoration: none;
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));

        }

        .cadastro {
            text-decoration: none;
        }
            </style>

</head>
<body>
    <div class="box">
        <img class="img-miguel" src="miguel-foto.jpg" height="350px" width="350px">
            <legend class="coracao-miguel">Coração do Miguel ❤️</legend>
            <form action="testLogin.php" method="POST">

            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome do Usuário</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <input class="submit" type="submit" name="submit" value="Entrar">
            <br><br>
            <p>Ainda não possui cadastro gata? <a class="cadastro" href="cadastro.html">Crie aqui!</a></p>
                
            </form>
    </div>
</body>
</html>