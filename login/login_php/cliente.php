<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cliente.css">
    <link rel="stylesheet" href="../../menu/menu.css">
    <link rel="shortcut icon" href="../../menu/assets/logo_icon.png" />
    <title>Tela Cliente - Alpha Esportes</title>
</head>
<body>

    <?php
    
        session_start();

        if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['cargo'] != 'cliente') {
            header("Location: ./admin.php");
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
                        <a href="acoes_clientes/cliente_deletar.php">Deletar Conta</a>
                    </div>

                </div>

            </div>

            <form action="./acoes_clientes/cliente_edit.php" method='post' class="col-12">

                <div class="row">

                    <div class="div-perfil col-2"><img src="assets/perfil.png" class='perfil'></div>

                    <div class="campo col-5">
                        <label>Nome:</label>
                        <input type="text" name='nome' value=<?php echo $_SESSION['usuario']['nome']?> required disabled>
                    </div>

                    <div class="campo col-5">
                        <label>Sobrenome:</label>
                        <input type="text" name='sobrenome' value=<?php echo $_SESSION['usuario']['sobrenome']?> required disabled>
                    </div>

                    <div class="campo col-12">
                        <label>CPF:</label>
                        <input type="text" name='cpf' value=<?php echo $_SESSION['usuario']['cpf']?> required disabled oninput="mascaraCPF(this)" maxlength="14">
                    </div>

                    <div class="campo col-6">
                        <label>Telefone:</label>
                        <input type="text" name='telefone' value="<?php echo $_SESSION['usuario']['telefone']?>" oninput="mascaraTelefone(this)" maxlength="15" required disabled>
                    </div>

                    <div class="campo col-6">
                        <label>CEP:</label>
                        <input type="text" name='cep' value=<?php echo $_SESSION['usuario']['cep']?> oninput="mascaraCEP(this)" maxlength="9" required disabled>
                    </div>

                    <div class="campo col-12">
                        <label>Email:</label>
                        <input type="email" name='email' value=<?php echo $_SESSION['usuario']['email']?> required disabled>
                    </div>

                    <div class="campo col-12">
                        <button type='button' class='editar'>Editar</button>
                        <button type='button' class='c-editar'>Cancelar Edição</button>
                    </div>

                    <div class="campo col-12">
                        <button type='button' class='salvar'>Salvar alterações</button>
                    </div>

                </div>

            </form>

        </div>

    </main>

        <script>

            // Máscaras

            function mascaraCPF(cpf) {
                let value = cpf.value.replace(/\D/g, "");
                
                value = value.replace(/^(\d{3})(\d)/, "$1.$2");
                value = value.replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3"); 
                value = value.replace(/\.(\d{3})(\d{1,2})$/, ".$1-$2"); 
                
                cpf.value = value; 
            }

            function mascaraTelefone(telefone) {
                let value = telefone.value.replace(/\D/g, ""); // Remove caracteres não numéricos
                
                // Formata o telefone no padrão (11) 11111-1111
                value = value.replace(/^(\d{2})(\d)/, "($1) $2"); // Adiciona o código de área
                value = value.replace(/(\d{5})(\d)/, "$1-$2"); // Adiciona o hífen

                telefone.value = value;
            }

            function mascaraCEP(cep) {
                let value = cep.value.replace(/\D/g, ""); // Remove caracteres não numéricos

                // Formata o CEP no padrão 21863-420
                value = value.replace(/^(\d{5})(\d)/, "$1-$2");

                cep.value = value;
            }


        </script>

    <script src="../../menu/menu.js"></script>

    <script src='scripts/cliente.js'></script>

</body>
</html>