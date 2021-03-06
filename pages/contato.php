<?php 
    if (isset($_POST['email']) && !empty($_POST['email'])) {
    
        $nome = addslashes($_POST['nome']);        
        $assunto = addslashes($_POST['assunto']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        // Corpo do Email
        $to = "contato@vulcanjetbrasil.com.br";
        $email_subject = "Contato - Vulcanjet Brasil";
        $body = "Nome: ".$nome."\r\n".
                "Assunto: ".$assunto."\r\n".
                "Email: ".$email."\r\n".                
                "Mensagem: ".$mensagem."\r\n";             
        $header = "From: site@vulcanjetbrasil.com.br"."\r\n".
                "Reply-To: ".$email."\r\n".
                "X=mailer:PHP/".phpversion();

        $status = mail($to, $assunto, $body, $header);  

        if ($status) {           
            echo "<p class='text center'>Email enviado com sucesso!</p>";                                  
                            
        }else {                       
            echo "<p class='text center'>Erro ao enviar o email. Tente novamente!</p>";                            
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulcanjet Brasil - Contato</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="../css/contato.css">

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="../img/fav-icon.png" type="image/x-icon">

    <!-- Meta Tags para Seo -->
    <meta name="title" content="Vulcanjet Brasil - Contato">
    <meta name="description" content="Entre em contato e conheça nossos serviços de Desinfecção e Higienização de Ambientes. Solicite um orçamento ou demonstração grátis.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://vulcanjetbrasil.com.br/pages/contato.php">
    <meta property="og:title" content="Vulcanjet Brasil - Contato">
    <meta property="og:description" content="Entre em contato e conheça nossos serviços de Desinfecção e Higienização de Ambientes. Solicite um orçamento ou demonstração grátis.">
    <meta property="og:image" content="http://vulcanjetbrasil.com.br/img/og-image.jpeg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://vulcanjetbrasil.com.br/pages/contato.php">
    <meta property="twitter:title" content="Vulcanjet Brasil - Contato">
    <meta property="twitter:description" content="Entre em contato e conheça nossos serviços de Desinfecção e Higienização de Ambientes. Solicite um orçamento ou demonstração grátis.">
    <meta property="twitter:image" content="http://vulcanjetbrasil.com.br/img/og-image.jpeg">
</head>

<body>
    <header>

        <!-- Openning Hours -->
        <div class="openning-hour">
            <span class="phone">Telefones: (87) 3024-0021 / (11) 2889-4199 </span>
            <div>
                <span id="open"></span>
                <span id="isOpen"></span>
            </div>
        </div>

        <!--navbar-->
        <nav class="navbar" role="navigation">
            <div class="nav-wrapper">
                <a id="logo-container" href="../index.html" class="brand-logo">
                    <img title="Vulcanjet Brasil" src="../img/vulcanjet-logo-1.png" alt="Vulcanjet Brasil Logo" width="88" height="auto">
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a title="Início" href="../index.html">Início</a></li>
                    <li><a title="Quem Somos" href="./quemsomos.html">Quem Somos</a></li>
                    <li><a title="Serviços" href="./servicos.html">Serviços</a></li>
                    <li><a title="Contato" href="./contato.php" class="active-link">Contato</a></li>
                    <li><a title="Blog" href="http://vulcanjetbrasil.com.br/blog/">Blog</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a title="Início" href="../index.html">Início</a></li>
                    <li><a title="Quem Somos" href="./quemsomos.html">Quem Somos</a></li>
                    <li><a title="Serviços" href="./servicos.html">Serviços</a></li>
                    <li><a title="Contato" href="./contato.php" class="active-link">Contato</a></li>
                    <li><a title="Blog" href="http://vulcanjetbrasil.com.br/blog/">Blog</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i>
                </a>
            </div>
        </nav>

        <!--banner-->
        <div class="banner center">
            <h1 class="">Contato</h1>
            <h2>Entre em contato conosco</h2>
        </div>
    </header>
    <main>

        <!-- Nossas Unidades -->
        <div class="container">
            <div class="section">
                <h2 class="title center">Nossas Unidades</h2>
                <div class="divider"></div><br>
            </div>
            <h3 class="center">SEDE</h3><br><br>
        </div>

        <!-- Mapas Sede e Filial-->
        <div class="maps">
            <div class="mapa-sede">
                <iframe src="../private/maps/sede.html" frameborder="0" allowfullscreen></iframe>
            </div><br>

            <div class="container">
                <h3 class="center">FILIAL NORDESTE</h3>
            </div><br><br>
            <div class="mapa-filial">
                <iframe src="../private/maps/filial.html" frameborder="0" allowfullscreen></iframe>
            </div>
        </div><br><br>

        <!-- Contato -->
        <div class="contact">
            <div class="container">
                <section id="contactId" class="section">
                    <h2 class="title center">Contato</h2>
                    <div class="divider"></div><br><br>
                    <div class="text">
                        <p>Tem alguma dúvida, sugestão ou deseja saber mais sobres nossos serviços? Fique à vontade
                            para entrar em contato. Solicite um <strong>orçamento</strong> ou uma <strong>demonstração
                                grátis.</strong> Estamos aqui para lhe ajudar.</p>
                    </div><br>
                </section>
            </div>

            <div class="informations">
                <div class="address">
                    <div>
                        <h4 class="center">Informações de Contato</h4><br>
                        <p><strong>SEDE:</strong> Rua Nossa Senhora da Pompéia, 07411-395, ARUJÁ, SP</p>
                        <p> <strong>TELEFONE:</strong> (11) 2889 4191</p>
                        <p><strong>FILIAL NORDESTE:</strong> Rua Princesa Isabel, 145, Vila Mocó, Petrolina,PE</p>
                        <p><strong>TELEFONE:</strong> (87) 3024 0021</p>
                        <p> <strong>WHATSAPP:</strong> (74) 9 9909 0239</p>
                        <p><strong>EMAIL:</strong> contato@vulcanjetbrasil.com.br</p>
                    </div>
                </div>

                <div class="contact-form">
                    <h4 class="center">Formulário de Contato</h4><br>
                    <form action="contato.php" method="POST">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" required>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">forum</i>
                            <label for="assunto">Assunto:</label>
                            <input type="text" name="assunto" id="assunto">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">mail</i>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">message</i>
                            <label for="textarea1">Mensagem:</label>
                            <textarea id="textarea1" data-length="500" class="materialize-textarea" name="mensagem"
                                required></textarea>
                        </div>

                        <button class="button" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h4 class="center">Nossas Redes Sociais</h4>
                    <div class="social center">
                        <a href="https://www.instagram.com/vulcanjetbr/" target="_blank"><img
                                src="../img/instagram-icon.png" alt="Instagram Icon" width="30"></a>
                        <a href="https://bit.ly/3aa7hrT" target="_blank"><img src="../img/whatsapp-icon.png"
                                alt="Whatsapp Icon" width="30"></a>
                        <a href="https://www.facebook.com/Vulcanjet-Brasil-103662841372481/" target="_blank"><img
                                src="../img/facebook-icon.png" alt="Facebook Icon" width="30"></a>
                    </div>
                </div>
                <div class="col l6 s12 center">
                    <h4>Onde nos encontrar</h4>
                    <h5>Sede</h5><br>
                    <p>Rua Nossa Senhora da Pompéia, 664 A - Nova Arujá - Arujá, - CEP: 07411-395 - SP, Brasil
                    </p><br>
                    <h5>Filial Nordeste</h5><br>
                    <p>Rua Princesa Isabel 145, Vila Moco - Petrolina - PE
                        CEP: 56304-510 - PE, Brasil</p><br>
                    <p>Telefone: (87) 3024 0021</p><br>
                    <p>WhastApp: <a href="https://bit.ly/3aa7hrT" target="_blank">(74) 9 9909 0239</a></p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <span>&#169; 2020-2021 Todos Direitos Reservados</span><br>
            <span><a href="https://icons8.com/" target="_blank">Icon8</a></span><br>
            <span>Vulcanjet do Brasil Equipamentos e Serviços LTDA</span>
        </div>

    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    <script defer src="../js/open.js"></script>

</body>

</html>