<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/logo_icon.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../menu/menu.css">
    <script src="https://kit.fontawesome.com/1b07e3c1f8.js" crossorigin="anonymous"></script>
    <title>Alpha Esportes</title>
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
                <li><a href="index.php">Início</a></li>
                <li><a href="../loja/loja.php">Loja</a></li>
                <li><a href="../sobre-nos/sobre-nos.html">Sobre nós</a></li>
                <li><a href="../fale_conosco/fale_conosco.html">Fale conosco</a></li>
                <li><a href="../login/login_php/cliente.php">Minha conta</a></li>
            </ul>
        </div>

    </header>

    <main>

        <div class="capa row">

            <div class="capa-conteudo col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">

                <h1> Transforme Desafios em Conquistas! </h1>

                <h2> Equipe-se com o melhor, desempenhe com Excelência. </h2>

                <a href="../loja/loja.php">VER PRODUTOS</a>

            </div>

            <div class="capa-img col-5">

                <img src="assets/capa.png" alt="">

            </div>

        </div>

        <div class="categorias categorias-desktop">

            <div class="container-xl row m-auto categorias-content">

                <div class="categoria col-2">

                    <a href="../loja/loja-filtrada.php?categoria=camisa" style="text-decoration:none;">
                        <img src="assets/camisa.png" alt=""> <br>
                        <span>Camisetas</span>
                    </a>

                </div>

                <div class="categoria col-2">

                    <a href="../loja/loja-filtrada.php?categoria=short" style="text-decoration:none;">
                        <img src="assets/bermuda.png" alt=""> <br>
                        <span>Bermudas</span>
                    </a>

                </div>

                <div class="categoria col-2">

                    <a href="../loja/loja-filtrada.php?categoria=casaco" style="text-decoration:none;">
                        <img src="assets/casaco.png" alt=""> <br>
                        <span>Casacos</span>
                    </a>

                </div>

                <div class="categoria col-2">

                    <a href="../loja/loja-filtrada.php?categoria=acessorio" style="text-decoration:none;">
                        <img src="assets/bone.png" alt=""> <br>
                        <span>Acessórios</span>
                    </a>

                </div>

                <div class="categoria col-2">

                    <a href="../loja/loja-filtrada.php?categoria=calcado" style="text-decoration:none;">
                        <img src="assets/tenis.png" alt=""> <br>
                        <span>Calçados</span>
                    </a>

                </div>

                <div class="categoria col-2">

                    <a href="../loja/loja-filtrada.php?categoria=mochila" style="text-decoration:none;">
                        <img src="assets/mochila.png" alt="">
                        <span>Mochilas</span>
                    </a>

                </div>

            </div>

        </div>

        <div id="carouselExample" class="carousel slide categorias-mobile">
            <div class="carousel-inner">
              <div class="carousel-item active categorias">
                
                <div class="container-xl row m-auto categorias-content">

                    <div class="categoria col-2">
    
                        <img src="assets/camisa.png" alt="">
                        <span>Camisetas</span>
    
                    </div>
    
                    <div class="categoria col-2">
    
                        <img src="assets/bermuda.png" alt="">
                        <span>Bermudas</span>
    
                    </div>
    
                    <div class="categoria col-2">
    
                        <img src="assets/casaco.png" alt="">
                        <span>Casacos</span>
    
                    </div>
                </div>

              </div>
              <div class="carousel-item categorias">
                
                <div class="container-xl row m-auto categorias-content">

                    <div class="categoria col-2">
    
                        <img src="assets/mochila.png" alt="">
                        <span>Camisetas</span>
    
                    </div>
    
                    <div class="categoria col-2">
    
                        <img src="assets/tenis.png" alt="">
                        <span>Bermudas</span>
    
                    </div>
    
                    <div class="categoria col-2">
    
                        <img src="assets/bone.png" alt="">
                        <span>Casacos</span>
    
                    </div>
                </div>

              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon anterior" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon proximo" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="sessao novidades w-100">

            <h1 class="titulo-sessao">NOVIDADES</h1>

            <div id="carouselNovidades" class="carousel slide">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    
                        <div class="container-novidades row justify-content-center">

                            <?php
                                
                                $conn = new mysqli('localhost', 'root', '', 'estacio');


                                if ($conn->connect_error) {
                                    die("Conexão falhou: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM `produtos`";
                                $result = mysqli_query($conn,$sql);

                                if ($result) {

                                    
                                    $produtos = [];

                                    while ($produto = mysqli_fetch_assoc($result)) {
                                        $produtos[] = $produto;
                                    }

                                    $tamanhoVetor = count($produtos);

                                    $prod1 = $produtos[$tamanhoVetor - 1];
                                    $prod2 = $produtos[$tamanhoVetor - 2];
                                    $prod3 = $produtos[$tamanhoVetor - 3];

                                    echo "<div class='card-novidades col-3'>
                                            <img src='../login/login_php/acoes_admin/img_produtos/$prod1[imagem]'>
                                            <span class='produto'>$prod1[nome]</span>
                                            <span class='marca'>$prod1[colecao]</span>
                                            <span class='preco'>R$ $prod1[preco]</span>
                                            <button class='ver-produto'>VER PRODUTO</button>
                                        </div>";
                                    
                                        echo "<div class='card-novidades col-3'>
                                        <img src='../login/login_php/acoes_admin/img_produtos/$prod2[imagem]'>
                                        <span class='produto'>$prod2[nome]</span>
                                        <span class='marca'>$prod2[colecao]</span>
                                        <span class='preco'>R$ $prod2[preco]</span>
                                        <button class='ver-produto'>VER PRODUTO</button>
                                        </div>";

                                        echo "<div class='card-novidades col-3'>
                                            <img src='../login/login_php/acoes_admin/img_produtos/$prod3[imagem]'>
                                            <span class='produto'>$prod3[nome]</span>
                                            <span class='marca'>$prod3[colecao]</span>
                                            <span class='preco'>R$ $prod3[preco]</span>
                                            <button class='ver-produto'>VER PRODUTO</button>
                                        </div>";
                                    
                                }
                            
                            ?>

                        </div>

                  </div>

                  <div class="carousel-item">
                    
                    <div class="container-novidades row justify-content-center">

                    <?php
                                
                                $conn = new mysqli('localhost', 'root', '', 'estacio');


                                if ($conn->connect_error) {
                                    die("Conexão falhou: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM `produtos`";
                                $result = mysqli_query($conn,$sql);

                                if ($result) {

                                    
                                    $produtos = [];

                                    while ($produto = mysqli_fetch_assoc($result)) {
                                        $produtos[] = $produto;
                                    }

                                    $tamanhoVetor = count($produtos);

                                    $prod4 = $produtos[$tamanhoVetor - 4];
                                    $prod5 = $produtos[$tamanhoVetor - 5];
                                    $prod6 = $produtos[$tamanhoVetor - 6];

                                    echo "<div class='card-novidades col-3'>
                                            <img src='../login/login_php/acoes_admin/img_produtos/$prod4[imagem]'>
                                            <span class='produto'>$prod4[nome]</span>
                                            <span class='marca'>$prod4[colecao]</span>
                                            <span class='preco'>R$ $prod4[preco]</span>
                                            <button class='ver-produto'>VER PRODUTO</button>
                                        </div>";
                                    
                                        echo "<div class='card-novidades col-3'>
                                        <img src='../login/login_php/acoes_admin/img_produtos/$prod5[imagem]'>
                                        <span class='produto'>$prod5[nome]</span>
                                        <span class='marca'>$prod5[colecao]</span>
                                        <span class='preco'>R$ $prod5[preco]</span>
                                        <button class='ver-produto'>VER PRODUTO</button>
                                        </div>";

                                        echo "<div class='card-novidades col-3'>
                                            <img src='../login/login_php/acoes_admin/img_produtos/$prod6[imagem]'>
                                            <span class='produto'>$prod6[nome]</span>
                                            <span class='marca'>$prod6[colecao]</span>
                                            <span class='preco'>R$ $prod6[preco]</span>
                                            <button class='ver-produto'>VER PRODUTO</button>
                                        </div>";
                                    
                                }
                            
                            ?>

                    </div>

                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselNovidades" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon bg-black" aria-hidden="true" style="border-radius:50%;"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselNovidades" data-bs-slide="next">
                  <span class="carousel-control-next-icon bg-black" aria-hidden="true" style="border-radius:50%;"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div id="carouselNovidades2" class="carousel slide">
                <div class="carousel-inner">
            
                    <div class="carousel-item active">
                        
                        <div class="container-novidades row justify-content-center">
            
                            <div class="card-novidades col-md-6 col-sm-6 col-6">
                                <img src="assets/produtos/nike.png">
                                <span class="produto">Tênis Esportivo Dunk 3 Masculino</span>
                                <span class="marca">Nike 2024</span>
                                <span class="preco">R$ 299,99</span>
                                <button class="ver-produto">VER PRODUTO</button>
                            </div>
            
                        </div>
            
                    </div>
            
                    <div class="carousel-item">
                        
                        <div class="container-novidades row justify-content-center">
            
                            <div class="card-novidades col-md-6 col-sm-6 col-6">
                                <img src="assets/produtos/adidas.png">
                                <span class="produto">Camisa Sportwear Pride Adidas</span>
                                <span class="marca">Adidas 2024</span>
                                <span class="preco">R$ 179,99</span>
                                <button class="ver-produto">VER PRODUTO</button>
                            </div>
            
                        </div>
            
                    </div>

                    <div class="carousel-item">
                        
                        <div class="container-novidades row justify-content-center">
            
                            <div class="card-novidades col-md-6 col-sm-6 col-6">
                                <img src="assets/produtos/crf.png">
                                <span class="produto">Jaqueta CRF 21/22 Chuva Masculina</span>
                                <span class="marca">Adidas/CRF 21/22</span>
                                <span class="preco">R$ 449,99</span>
                                <button class="ver-produto">VER PRODUTO</button>
                            </div>
            
                        </div>
            
                    </div>

                    <div class="carousel-item">
                        
                        <div class="container-novidades row justify-content-center">
            
                            <div class="card-novidades col-md-6 col-sm-6 col-6">
                                <img src="assets/produtos/adidas2.png">
                                <span class="produto">Chuteira X SpeedFlow Campo</span>
                                <span class="marca">Adidas 2024</span>
                                <span class="preco">R$ 439,99</span>
                                <button class="ver-produto">VER PRODUTO</button>
                            </div>
            
                        </div>
            
                    </div>

                    <div class="carousel-item">
                        
                        <div class="container-novidades row justify-content-center">
            
                            <div class="card-novidades col-md-6 col-sm-6 col-6">
                                <img src="assets/produtos/nike2.png">
                                <span class="produto">Jaqueta Windrunner Masculina</span>
                                <span class="marca">Nike 2022</span>
                                <span class="preco">R$ 579,99</span>
                                <button class="ver-produto">VER PRODUTO</button>
                            </div>
            
                        </div>
            
                    </div>

                    <div class="carousel-item">
                        
                        <div class="container-novidades row justify-content-center">
            
                            <div class="card-novidades col-md-6 col-sm-6 col-6">
                                <img src="assets/produtos/adidas3.png">
                                <span class="produto">Boné Tiro League</span>
                                <span class="marca">Adidas 2022</span>
                                <span class="preco">R$ 119,99</span>
                                <button class="ver-produto">VER PRODUTO</button>
                            </div>
            
                        </div>
            
                    </div>
            
                </div>
            
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselNovidades2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-black" aria-hidden="true" style="border-radius:50%;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselNovidades2" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-black" aria-hidden="true" style="border-radius:50%;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <div class="esportes sessao">

            <h1 class="titulo-sessao">ESPORTES</h1>

            <div class="content-esportes row container-fluid">

                <div class="esporte col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">

                    <img src="assets/futebol.png" class="icon-esporte">

                    <span class="titulo-esporte"> FUTEBOL </span>

                    <p class="paragrafo-esporte">
                        Nossos produtos de futebol são escolhidos para oferecer desempenho superior e durabilidade. Desde chuteiras com tecnologia avançada para máximo controle e precisão, até bolas de alta qualidade que garantem jogabilidade profissional, oferecemos tudo o que você precisa para dominar o campo.
                    </p>

                    <a href="../loja/loja.php" class="link-esporte">VER PRODUTOS</a>

                </div>

                <div class="esporte col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">

                    <img src="assets/ciclismo.png" class="icon-esporte">

                    <span class="titulo-esporte"> CICLISMO </span>

                    <p class="paragrafo-esporte">
                        Nossa linha de ciclismo oferece bicicletas de alto desempenho, roupas técnicas e acessórios essenciais para todos os níveis de ciclistas. Cada produto é projetado para otimizar sua experiência, proporcionando conforto, segurança e velocidade, seja em trilhas desafiadoras ou estradas urbanas.
                    </p>

                    <a href="../loja/loja.php" class="link-esporte">VER PRODUTOS</a>

                </div>

                <div class="esporte col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">

                    <img src="assets/musculacao.png" class="icon-esporte">

                    <span class="titulo-esporte"> MUSCULAÇÃO </span>

                    <p class="paragrafo-esporte">
                        Nossos produtos de musculação oferecem qualidade e durabilidade para treinos intensos. De halteres a acessórios, tudo para ajudar você a alcançar suas metas de força e desempenho.
                    </p>

                    <a href="../loja/loja.php" class="link-esporte">VER PRODUTOS</a>

                </div>

                <div class="esporte col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">

                    <img src="assets/atletismo.png" class="icon-esporte">

                    <span class="titulo-esporte"> ATLETISMO </span>

                    <p class="paragrafo-esporte">
                        Nossa linha de atletismo inclui calçados leves e roupas técnicas, projetados para maximizar sua performance. Encare cada corrida com o suporte e o conforto necessários para superar seus limites.
                    </p>

                    <a href="../loja/loja.php" class="link-esporte">VER PRODUTOS</a>

                </div>

            </div>

        </div>

        <div class="sessao ofertas row">

            <div class="content-ofertas col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                <h1 class="titulo-sessao titulo-ofertas">OFERTAS DE OUTUBRO</h1>

                <p>Ofertas imperdíveis em setembro para você equipar-se com o melhor do esporte e alcançar seus objetivos com mais eficiência!</p>

                <div class="link-ofertas"><a href="../loja/loja.php">VER OFERTAS</a></div>

            </div>

            <div class="img-ofertas col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                <img src="assets/ofertas.png" alt="">

            </div>

        </div>

        <div class="sessao depoimentos">

            <h1 class="titulo-sessao titulo-depoimentos">FEEDBACKS</h1>

            <div class="content-depoimentos row container-lg m-auto">

                <div class="cliente col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <img src="assets/clientes/1.png" class="img-cliente">

                    <p>"Excelente loja! Encontrei tudo o que precisava para meu treino com uma qualidade incrível e um atendimento impecável. Recomendo a todos que buscam produtos esportivos de primeira linha!"</p>

                    <img src="assets/5estrelas.png" class="avaliacao">

                </div>

                <div class="cliente col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <img src="assets/clientes/2.png" class="img-cliente">

                    <p>"Excelente loja! Encontrei tudo o que precisava para meu treino com uma qualidade incrível e um atendimento impecável. Recomendo a todos que buscam produtos esportivos de primeira linha!"</p>

                    <img src="assets/4estrelas.png" class="avaliacao">

                </div>

                <div class="cliente col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <img src="assets/clientes/3.png" class="img-cliente">

                    <p>"Excelente loja! Encontrei tudo o que precisava para meu treino com uma qualidade incrível e um atendimento impecável. Recomendo a todos que buscam produtos esportivos de primeira linha!"</p>

                    <img src="assets/5estrelas.png" class="avaliacao">

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