<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../../menu/assets/logo_icon.png" />
    <title>Lista de clientes - Alpha Esportes</title>
    <style>
        body {
            background-color:#151515;
        }

        header {
            text-align:center;
            padding:10px;
        }

        a {
            color:#ccfe06;
            font-weight:bold;
            font-size:22px;
        }

        td,th {
            font-size:22px;
        }

    </style>
</head>
<body>

        <header>  
            <img src="../../../pagina-inicial/assets/logo.png" alt="">
        </header>

    <?php

        session_start();
    
        if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['cargo'] != 'admin') {
            header("Location: ../../login.html");
            exit;
        }

    ?>

    <main> 

        <div class="container-lg">

        <div class="container d-flex align-items-center justify-content-center w-100 flex-column" style='height:100vh;'>

        <table class="table table-dark">

            <thead>
                <tr>
                <th scope="col" class='p-3'>ID</th>
                <th scope="col" class='p-3'>Nome</th>
                <th scope="col" class='p-3'>CPF</th>
                <th scope='col' class='p-3'>CEP</th>
                <th scope="col" class='p-3'>Email</th>
                <th scope="col" class='p-3'>Telefone</th>
                </tr>
            </thead>

            <tbody>
                
                <?php
                
                    $conn = new mysqli('localhost', 'root', '', 'estacio');


                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM `usuarios` WHERE `cargo` = 'cliente'";
                    $result = mysqli_query($conn,$sql);

                    while ($linha = mysqli_fetch_assoc($result)) {

                         echo " <tr>
                                <th scope='row' class='p-3'>$linha[id]</th>
                                <td class='p-3'>$linha[nome] $linha[sobrenome]</td>
                                <td class='p-3'>$linha[cpf]</td>
                                <td class='p-3'>$linha[cep]</td>
                                <td class='p-3'>$linha[email]</td>
                                <td class='p-3'>$linha[telefone]</td>
                               
                            </tr>";

                    }
                
                ?>

            </tbody>

        </table>

        <a href="../admin.php">Voltar</a>
    </div>
            
        </div>

    </main>

    <script src="../../../menu/menu.js"></script>

</body>
</html>