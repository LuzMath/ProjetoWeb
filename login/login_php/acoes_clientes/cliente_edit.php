<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../menu/assets/logo_icon.png" />
    <title>Alterar dados - Alpha Esportes</title>

    <style>

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #151515;
        }

        h1 {
            color: white;
            font-size: 58px;
        }

        a {
            color: #ccfe06;
            font-size: 28px;
        }

        body > div {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    </style>

</head>
<body>
    
<?php
    
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'estacio');


    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['cargo'] != 'cliente') {
        header("Location: ../admin.php");
        exit;
    }

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $tel = $_POST['telefone'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];

    $sql1 = "SELECT * FROM usuarios WHERE email='$email' and id!='{$_SESSION['usuario']['id']}'";
    $result1 = mysqli_query($conn,$sql1);

    $sql2 = "SELECT * FROM usuarios WHERE cpf='$cpf' and id!='{$_SESSION['usuario']['id']}'";
    $result2 = mysqli_query($conn,$sql2);

        if (mysqli_num_rows($result1) > 0) {

            echo"<div> 
                    <h1> Email já cadastrado em nossa base de dados </h1>
                    <a href='../cliente.php'> Voltar </a>
                </div>";

        } else {

            if (mysqli_num_rows($result2) > 0) {

                echo"<div> 
                    <h1> CPF já cadastrado em nossa base de dados </h1>
                    <a href='../cliente.php'> Voltar </a>
                </div>";

            }else {

                $sql = "UPDATE `usuarios` SET `nome`='$nome',`sobrenome`='$sobrenome',`cpf`='$cpf',`telefone`='$tel',`cep`='$cep',`email`='$email' WHERE `id` = '{$_SESSION["usuario"]["id"]}' ";
                $result = mysqli_query($conn, $sql);

                $sqlAtualizar = "SELECT * from `usuarios` WHERE `id`='{$_SESSION["usuario"]["id"]}'";
                $resultAtualizar = mysqli_query($conn,$sqlAtualizar);

                $usuario = mysqli_fetch_assoc($resultAtualizar);

                $_SESSION['usuario'] = $usuario;

                if ($result) {

                    echo"<div> 
                            <h1> Atualização de Dados Realizada com Sucesso! </h1>
                            <a href='../cliente.php'> Voltar </a>
                        </div>";
        
                } else {
                    echo"<div> 
                            <h1> Erro na atualização! </h1>
                            <a href='../cliente.php'> Voltar </a>
                        </div>";
                }

            }

        }

?>

</body>
</html>