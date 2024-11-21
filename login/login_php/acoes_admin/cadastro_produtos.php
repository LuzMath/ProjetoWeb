<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastro de produtos - Alpha Esportes</title>
    <link rel="shortcut icon" href="../../../menu/assets/logo_icon.png" />
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

        .container-lg {
            text-align:center;
        }

        form, a {
            margin:0 auto;
            width: 100%;
        }

        form {
            text-align: left;
        }

        .campo {
            display:flex;
            flex-direction:column;
            color:#fff;
            padding:10px;
        }

        label {
            font-size:22px;
        }

        input {
            padding:12px;
        }

        .campo > button {
            background-color:#ccfe06;
            border:0;
            padding:10px;
            font-weight:bold;
            font-size:22px
        }

        select {
            padding:10px;
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

            <form action="confirmar_cadastroprod.php" method='post' enctype="multipart/form-data">

                <div class="campo">

                    <label>Nome:</label>
                    <input type="text" name='nome' placeholder='Nome do produto' required>

                </div>

                <div class="campo">

                    <label>Coleção/Marca:</label>
                    <input type="text" name='colecao' placeholder='Coleção/Marca do produto' required>

                </div>

                <div class="campo">

                    <label>Preço:</label>
                    <input type="number" name='preco' placeholder='Preço do produto em R$' step="0.01" required>

                </div>

                <div class="campo">

                    <label>Categoria: </label>

                    <select name="categoria" required>
                        <option value="camisa">Camisa</option>
                        <option value="short">Short</option>
                        <option value="casaco">Casaco</option>
                        <option value="acessorio">Acessório</option>
                        <option value="calcado">Calçado</option>
                        <option value="mochila">Mochila</option>
                    </select>

                </div>

                <div class="campo">

                    <label>Imagem do Produto:</label>
                    <input type="file" name="imagem" accept="image/*" required>

                </div>

                <div class="campo">

                    <button> Cadastrar </button>

                </div>


            </form>

        <a href="../admin.php">Voltar</a>
    </div>
            
        </div>

    </main>

    <script src="../../../menu/menu.js"></script>

</body>
</html>