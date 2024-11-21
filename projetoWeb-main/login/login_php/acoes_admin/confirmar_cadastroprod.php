<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/estilos/alertas_login.css">
    <link rel="shortcut icon" href="../../../menu/assets/logo_icon.png" />
    <title>Verificação cadastro de produtos - Alpha Esportes</title>

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

        if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['cargo'] != 'admin') {
            header("Location: ../../login.html");
            exit;
        }

        $conn = new mysqli('localhost', 'root', '', 'estacio');


        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $nome = $_POST['nome'];
        $colecao = $_POST['colecao'];
        $preco = $_POST['preco'];
        $categoria = $_POST['categoria'];

        $imagem = $_FILES['imagem'];
        $nomeImagem = $imagem['name'];
        $caminhoTemp = $imagem['tmp_name'];
        $diretorioDestino = './img_produtos/' . $nomeImagem;

        if (move_uploaded_file($caminhoTemp, $diretorioDestino)) {
            $sql = "INSERT INTO produtos (nome, colecao,preco,imagem,categoria) VALUES ('$nome', '$colecao', '$preco', '$nomeImagem','$categoria')";
            $result = mysqli_query($conn,$sql);

            if ($result) {

                echo " <div> <h1> Produto cadastrado com sucesso! </h1> <a href='./cadastro_produtos.php'> Voltar </a> </div>";

            } else {
                echo " <div> <h1> Erro no cadastro do produto! </h1> <a href='./cadastro_produtos.php'> Voltar </a> </div>";
            }
            
            
        } else {
            echo " <div> <h1> Erro no upload da imagem! </h1> <a href='./cadastro_produtos.php'> Voltar </a> </div>";
        }

    ?>

</body>
</html>