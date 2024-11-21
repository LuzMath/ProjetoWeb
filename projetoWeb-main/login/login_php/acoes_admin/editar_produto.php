<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Edição de produtos - Alpha Esportes</title>
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

        .imagem {
            width:250px;
            height:200px;
        }

        select {
            padding: 10px;
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

            $id = $_GET['id'];

            $sql = "SELECT * FROM `produtos` WHERE `id`=$id";
            $result = mysqli_query($conn,$sql);

            $produto = mysqli_fetch_assoc($result);

    ?>

    <main> 

        <div class="container-lg">

            <form action="confirmar_editproduto.php" method='post' enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                <input type="hidden" name="imagem_atual" value="<?php echo $produto['imagem']; ?>">


                <div class="campo">

                    <label>Nome:</label>
                    <input type="text" name='nome' placeholder='Nome do produto' value="<?php echo $produto['nome']?>" required>

                </div>

                <div class="campo">

                    <label>Coleção/Marca:</label>
                    <input type="text" name='colecao' placeholder='Coleção/Marca do produto' value="<?php echo $produto['colecao']?>" required>

                </div>

                <div class="campo">

                    <label>Preço:</label>
                    <input type="number" name='preco' placeholder='Preço do produto em R$' step="0.01" value="<?php echo $produto['preco']?>" required>

                </div>

                <div class="campo">
                    <label>Imagem Atual:</label><br>
                    <img src="./img_produtos/<?php echo $produto['imagem']; ?>" alt="Imagem atual do produto" class='imagem'>
                </div>

                <div class="campo">

                    <label>Categoria: </label>

                    <select name="categoria">
                        <option value="camisa">Camisa</option>
                        <option value="short">Short</option>
                        <option value="casaco">Casaco</option>
                        <option value="acessorio">Acessório</option>
                        <option value="calcado">Calçado</option>
                        <option value="mochila">Mochila</option>
                    </select>

                </div>

                <div class="campo">

                    <label>Alterar Imagem do Produto:</label>
                    <input type="file" name="nova_imagem" accept="image/*">

                </div>

                <div class="campo">

                    <button> Editar </button>

                </div>


            </form>

            <a href="./visualizar_prods.php">Voltar</a>
        </div>
            
        </div>

    </main>

</body>
</html>