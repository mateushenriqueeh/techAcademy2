<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechJogos</title>
    <meta name="description" content="Página de games, com jogos gratuitos">
    <meta name="keyworlds" content="games, jogos, lançamentos">
    <script src="slide.js" defer></script>
    

    <!-- mudar para link do meu site quando colocar no ar -->
    <base href="http://localhost/paginagames/">


    <!--Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--Links CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="csss/style.css">


</head>

<body>
    <?php
    //buscar dados dos games api

    $url = "infogames.json";

    //importar os santos da api

    $dadosApi = file_get_contents($url);

    //transformar de Json para array ou objeto

    $dadosJogos = json_decode($dadosApi);

    // para testar e ver oque tem dentro da API print_r($dadosJogos);

    ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo1.png" alt="logo Site"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">
                            <i class="fa-solid fa-house"></i>
                            
                        Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos">
                        <i class="fa-solid fa-info"></i>
                            Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-gamepad"></i>
                            Games
                        </a>
                        <ul class="dropdown-menu">

                            <?php

                            foreach ($dadosJogos as $dados) {
                                echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a></li>";
                            }


                            ?>

                        </ul>
                    </li>

                </ul>
                <div class="d-flex">
                    <a href="contato" title="Contato" class="btn btn-info">
                        <i class="fas fa-envelope"> Entre em contato</i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php
        //print_r($_GET);
        $pagina = "home";

        //verificar se foi clicado em algum menu

        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"] ?? "home";
            $pagina = explode("/", $pagina);

            //print_r($pagina);

            $codigo = $pagina[1] ?? Null;
            $pagina = $pagina[0] ?? "home";
        }

        $pagina = "pages/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }




        ?>
    </main>



    <!--Scripts -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>

</body>

</html>