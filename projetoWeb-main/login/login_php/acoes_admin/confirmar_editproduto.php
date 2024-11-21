<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/estilos/alertas_login.css">
    <link rel="shortcut icon" href="../../../menu/assets/logo_icon.png" />
    <title>Verificação atualização de produtos - Alpha Esportes</title>

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

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $colecao = $_POST['colecao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $imagem_atual = $_POST['imagem_atual'];

    if ($_FILES['nova_imagem']['error'] === UPLOAD_ERR_OK) {
        $nova_imagem = $_FILES['nova_imagem']['name'];
        $temp_name = $_FILES['nova_imagem']['tmp_name'];
        $destino = './img_produtos/' . $nova_imagem;

        move_uploaded_file($temp_name, $destino);

        $imagem = $nova_imagem;
    } else {
        $imagem = $imagem_atual;
    }

    $sql = "UPDATE `produtos` SET `nome`='$nome', `colecao`='$colecao', `preco`='$preco', `imagem`='$imagem',`categoria` = '$categoria' WHERE `id`=$id";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo " <div> <h1> Produto editado com sucesso! </h1> <a href='./visualizar_prods.php'> Voltar </a> </div>";
    } else {
        echo " <div> <h1> Erro na edição do produto! </h1> <a href='./visualizar_prods.php'> Voltar </a> </div>";
    }

?>

</body>
</html>