<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/logo_icon.png" />
    <link rel="stylesheet" href="loja.css">
    <link rel="stylesheet" href="../menu/menu.css">
    <script src="https://kit.fontawesome.com/1b07e3c1f8.js" crossorigin="anonymous"></script>
    <title>Loja - Alpha Esportes</title>
</head>
<body>
    
    <header>

        <div class="menu">
            <div class="hamburguer">
                <hr>
                <hr>
                <hr>
            </div>
            <img src="assets/logo.png" alt="">
            <div class="void">
            </div>
        </div>

        <div class="menu-open">
            <ul>
                <li><a href="../pagina-inicial/index.php">Início</a></li>
                <li><a href="loja.php">Loja</a></li>
                <li><a href="../sobre-nos/sobre-nos.html">Sobre nós</a></li>
                <li><a href="../fale_conosco/fale_conosco.html">Fale conosco</a></li>
                <li><a href="../login/login_php/cliente.php">Minha conta</a></li>
            </ul>
        </div>

    </header>

    <main>

        <div class="container-capa">
            <div class="capa row">
                <div class="capa-conteudo col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <h1> Transforme Desafios em Conquistas! </h1>
                    <h2> Equipe-se com o melhor, desempenhe com Excelência. </h2>
                </div>
                <div class="capa-img col-5">
                    <img src="assets/capa.png" alt="">
                </div>
            </div>
        </div>

        <div class="loja sessao">

            <div class="container-loja container-lg">

                <div class="nav-loja">

                    <div class="titulo">

                        <span class="titulo-sessao col-6">SHOP</span>

                    </div>

                    

                </div>

                <div class="container-catalago container-xl">

                    <div class="row">

                        <?php
                        
                            $conn = new mysqli('localhost', 'root', '', 'estacio');


                            if ($conn->connect_error) {
                                die("Conexão falhou: " . $conn->connect_error);
                            }

                            $categoria = $_GET['categoria'];

                            $sql = "SELECT * FROM `produtos`";
                            $result = mysqli_query($conn,$sql);

                            if ($result) {

                                while ($linha = mysqli_fetch_assoc($result)) {

                                    if ($linha['categoria'] == $categoria) {

                                        echo " <div class='prod-col col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12'>
                                            <div class='card-produto'>
                                                <img src='../login/login_php/acoes_admin/img_produtos/$linha[imagem]'>
                                                <span class='produto'>$linha[nome]</span>
                                                <span class='marca'>$linha[colecao]</span>
                                                <span class='preco'>R$ $linha[preco]</span>
                                                <button class='ver-produto'>VER PRODUTO</button>
                                            </div>
                                        </div>";

                                    }
           
                               }

                            }
                        
                        ?>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <footer class="sessao">

        <div class="logo_rodape">
            <img src="assets/logo_preta.png" alt="">
        </div>

        <div class="content-rodape row container-lg m-auto">

            <div class="informacao col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                <h3>CAMPO GRANDE</h3>

                <div class="dados">

                    <div>Rua das Acácias, 123</div>
                    <div>Rio de Janeiro, RJ</div>

                </div>

                <div class="dados">

                    <div>(21) 93456-7890</div>
                    <div>nossaempresa@empresa.com.br</div>
                    <div>@empresa</div>

                </div>

            </div>

            <div class="informacao col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                <h3>FUNCIONAMENTO</h3>

                <div class="dados">

                    <div>Segunda á Sexta</div>
                    <div>09h ás 18h</div>

                </div>

                <div class="dados">

                    <div>Sábado</div>
                    <div>08h ás 12h</div>

                </div>

                <div class="dados">

                    <div>Fechado aos Domingos</div>

                </div>

            </div>

            <div class="informacao col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                <h3>FIQUE CONECTADO</h3>

                <div class="dados">

                    <a href=""> <i class="fa-brands fa-facebook fa-2xl"></i> </a>

                    <a href=""> <i class="fa-brands fa-instagram fa-2xl"></i> </a>

                    <a href=""> <i class="fa-brands fa-threads fa-2xl"></i> </a>

                </div>

            </div>

        </div>

    </footer>

    <script>
        
        const verProds = document.querySelectorAll('.ver-produto');

        console.log(verProds);

        verProds.forEach(function(botao) {
            botao.addEventListener('click', function() {
                alert('VID (Visualização individual de produto) não disponível no momento');
            });
        });

    </script>

    <script src="../menu/menu.js"></script>

</body>
</html>