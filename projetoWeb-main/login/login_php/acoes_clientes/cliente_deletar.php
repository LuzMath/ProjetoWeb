<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../menu/assets/logo_icon.png" />
    <title>Exclusão de conta - Alpha Esportes</title>

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

        $sql = "DELETE FROM `usuarios` WHERE `id` = '{$_SESSION['usuario']['id']}'";
        $result = mysqli_query($conn,$sql);

        if ($result) {

            echo"<div> 
                    <h1> Conta excluída com sucesso! </h1>
                    <a href='../cliente.php'> Voltar </a>
                </div>";
            session_destroy();

        } else {

            echo"<div> 
            <h1> Erro na exclusão da conta! </h1>
            <a href='../cliente.php'> Voltar </a>
            </div>";

        }
    
    ?>
</body>
</html>