<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/estilos/alertas_login.css">
    <link rel="shortcut icon" href="../../menu/assets/logo_icon.png" />
    <title>Cadastro - Resposta - Alpha Esportes</title>
</head>
<body>
    
    <?php

        $conn = new mysqli('localhost', 'root', '', 'estacio');

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $tel = $_POST['tel'];
        $cep = $_POST['cep'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Hash da senha usando bcrypt
        $senha_hashed = password_hash($senha, PASSWORD_BCRYPT);

        $sql1 = "SELECT * FROM usuarios WHERE email='$email'";
        $result1 = mysqli_query($conn, $sql1);

        $sql2 = "SELECT * FROM usuarios WHERE cpf='$cpf'";
        $result2 = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result1) > 0) {
            echo "<div> 
                    <h1>Email já cadastrado em nossa base de dados</h1>
                    <a href='../registro.html'>Voltar</a>
                </div>";
        } else {
            if (mysqli_num_rows($result2) > 0) {
                echo "<div> 
                    <h1>CPF já cadastrado em nossa base de dados</h1>
                    <a href='../registro.html'>Voltar</a>
                </div>";
            } else {
                $sql = "INSERT INTO `usuarios`(`id`, `nome`, `sobrenome`, `cpf`, `telefone`, `cep`, `email`, `senha`, `cargo`) 
                        VALUES (null, '$nome', '$sobrenome', '$cpf', '$tel', '$cep', '$email', '$senha_hashed', 'cliente')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<div> 
                            <h1>Cadastro Realizado com Sucesso!</h1>
                            <a href='../login.html'>Logar</a>
                        </div>";
                } else {
                    echo "<div> 
                            <h1>Erro no cadastro!</h1>
                            <a href='../registro.html'>Voltar para cadastro</a>
                        </div>";
                }
            }
        }

    ?>

</body>
</html>
