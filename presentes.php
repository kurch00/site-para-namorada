<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentes</title>
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
            width: 30%;
            height: 47%;
        }

        .submit {
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            text-decoration: none;
            border: none;
            padding: 25px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 10px;
            justify-content: space-around;
        }


    </style>
</head>
<body>
<div class="box">
        <h1>Escolha uma opção:</h1>
        <a href="pedido.php"><button class="submit">Comida Favorita</button></a>
        <br><br>
        <a href="pedido.php"><button class="submit">Cineminha</button></a>
        <br><br>
        <a href="pedido.php"><button class="submit">Café da manhã gourmet</button></a>
        <br><br>
        <a href="pedido.php"><button class="submit">Sexo bem bolado</button></a>
        <br><br>
    </div>
</body>
</html>