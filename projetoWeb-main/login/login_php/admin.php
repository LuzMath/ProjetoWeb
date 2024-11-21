<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../../menu/menu.css">
    <link rel="shortcut icon" href="../../menu/assets/logo_icon.png" />
    <title>Tela Admin - Alpha Esportes</title>
</head>
<body>

    <?php

        session_start();
    
        if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['cargo'] != 'admin') {
            header("Location: ../login.html");
            exit;
        }

    ?>

    <header>

        <div class="menu">
            <div class="hamburguer">
                <hr>
                <hr>
                <hr>
            </div>
            <img src="../../pagina-inicial/assets/logo.png" alt="">
            <div class="void">
            </div>
        </div>

        <div class="menu-open">
            <ul>
                <li><a href="../../pagina-inicial/index.php">Início</a></li>
                <li><a href="../../loja/loja.php">Loja</a></li>
                <li><a href="../../sobre-nos/sobre-nos.html">Sobre nós</a></li>
                <li><a href="../../fale_conosco/fale_conosco.html">Fale conosco</a></li>
                <li><a href="../../login/login_php/cliente.php">Minha conta</a></li>
            </ul>
        </div>

    </header>

    <main> 

        <div class="container-lg">

            <div class="row">
                
                <div class="acoes-conta col-12 row">

                    <div class="finalizar-sessao col-6">
                        <a href="logout.php">Finalizar Sessão</a>
                    </div>

                    <div class="deletar-conta col-6">
                    </div>

                </div>

            </div>

            <div class="acoes-admin">

                <div class="row">

                    <div class="col-2 box-perfil">
                        <img src="assets/perfil.png" class='perfil'>
                    </div>

                    <div class="col-10 nome">
                        <h1><?php echo $_SESSION['usuario']['nome']?> <?php echo $_SESSION['usuario']['sobrenome']?></h1>
                    </div>

                    <div class="acoes col-12">

                        <a href="./acoes_admin/lista_clientes.php" target='_blank'>Clientes</a>

                        <a href="./acoes_admin/visualizar_prods.php" target='_blank'>Produtos</a>

                        <a href="./acoes_admin/lista_formularios.php" target='_blank'>Formulários</a>

                    </div>

                </div>

            </div>
            
        </div>

    </main>

    <script src="../../menu/menu.js"></script>

</body>
</html>