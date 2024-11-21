<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="envio_form.css">
    <link rel="shortcut icon" href="../menu/assets/logo_icon.png" />
    <title>Confirmação Formulário - Alpha Esportes</title>
</head>
<body>
    
    <?php
    
        $conn = new mysqli('localhost', 'root', '', 'estacio');


        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO `formularios`(`id`, `nome`, `email`, `mensagem`) VALUES (null,'$nome','$email','$mensagem')";
        $result = mysqli_query($conn,$sql);

        if ($result) {

            echo"<div> 
                    <h1> Formulário enviado com sucesso! </h1>
                    <a href='../pagina-inicial/index.php'> Voltar para página inicial </a>
                </div>";

        } else {
            echo"<div> 
                    <h1> Erro no envio do formulário </h1>
                    <a href='fale_conosco.html'> Voltar para página inicial </a>
                </div>";
        }
    
    ?>

</body>
</html>