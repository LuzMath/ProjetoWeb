<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../../menu/assets/logo_icon.png" />
    <title>Visualização de produtos - Alpha Esportes</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Montserrat";
            color: #000;
        }

        .row {
            width: 100%;
        }

        header {
            background-color:#151515;
            padding:50px;
        }

        header a {
            color:#ccfe06;
            font-size:22px;
        }

        main {
            padding: 50px;
            width: 100%;
            background-color: #151515;
        }

        .titulo-sessao {
            font-size: 3rem;
            margin-bottom: 100px;
            color: #fff;
        }

        .sessao {
            padding: 50px;
        }

        .loja {
            background-color: #151515;
            padding-top: 170px;
        }

        .nav-loja {
            display: flex;
            flex-direction:column;
            justify-content: space-between;
        }

        /* Estilo Cards */

        .container-catalago > div {
            padding: 50px;
        }

        .prod-col {
            padding: 15px;
        }

        .card-produto {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 20px;
            height: 100%;
        }

        .card-produto img {
            width: 100%;
        }

        .card-produto > span, .card-produto button {
            width: 100%;
        }

        .card-produto a {
            display:block;
            width: 100%;
            text-align:center;
            text-decoration:none;
            font-weight:bold;   
            padding: 10px;
            border: 0;
            color:white;
        }

        .editar-produto {
            background-color:#26bfed;
        }

        .excluir-produto {
            background-color:#bd242e;
        }

        .preco {
            flex-grow: 1;
        }

        .titulo a {
            color:#ccfe06;
            font-size:22px;
        }

    </style>

</head>
<body>
    
    <header> 
    
        <a href="../admin.php">Voltar</a>

    </header>

    <main>
        <div class="loja sessao">
            <div class="container-loja container-lg">
                    <div class="nav-loja">
                        <div class="titulo w-100">
                            <span class="titulo-sessao">Edição de produtos</span>
                        </div>

                        <div class="titulo w-100">
                            <a href='./cadastro_produtos.php' target='_blank'> + Cadastrar produtos</a>
                        </div>

                    </div>
                    <div class="container-catalago container-xl">
                        <div class="row">
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
                                $sql = "SELECT * FROM `produtos`";
                                $result = mysqli_query($conn,$sql);
                                if ($result) {
                                    while ($linha = mysqli_fetch_assoc($result)) {
                                        echo " <div class='prod-col col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12'>
                                                    <div class='card-produto'>
                                                        <img src='./img_produtos/$linha[imagem]'>
                                                        <span class='produto'>$linha[nome]</span>
                                                        <span class='marca'>$linha[colecao]</span>
                                                        <span class='preco'>R$ $linha[preco]</span>
                                                        <a href='editar_produto.php?id=$linha[id]' class='editar-produto'>EDITAR</a>
                                                        <a href='excluir_produto.php?id=$linha[id]' class='excluir-produto'>EXCLUIR</a>
                                                    </div>
                                                </div>";
                                }
                                }
        
                            ?>
                        </div>
                    </div>
            </div>
        </div>
    </main>

</body>
</html>