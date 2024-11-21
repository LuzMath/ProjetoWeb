<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/estilos/alertas_login.css">
    <title>Verificação Login - Alpha Esportes</title>
</head>
<body>
   
    <?php

        session_start();

        $conn = new mysqli('localhost', 'root', '', 'estacio');

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $usuario = mysqli_fetch_assoc($result);

            // Verifica se a senha fornecida corresponde ao hash armazenado
            if (password_verify($senha, $usuario['senha'])) {

                $_SESSION['usuario'] = $usuario;

                if ($usuario['cargo'] == 'admin') {
                    header("Location: admin.php");
                } else {
                    header("Location: cliente.php");
                }

                exit;

            } else {
                echo "<div><h1>Email e/ou senha inválido(s)</h1><a href='../login.html'>Voltar</a></div>";
            }

        } else {
            echo "<div><h1>Email e/ou senha inválido(s)</h1><a href='../login.html'>Voltar</a></div>";
        }

    ?>

</body>
</html>
