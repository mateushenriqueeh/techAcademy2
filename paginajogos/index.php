<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechJogos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/crystal_1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
        <a href="index.php" title="home" class="header-logo">
            <img src="img/logo1.png" alt="logo">
        </a>

        <a href="javascript:mostrarMenu()" title="Menu" class="header-menu">
            <i class="fa-solid fa-bars"></i>
        </a>

    <nav class="header-nav">
    <ul>
        <li>


        <a href="#" title="Home">
            <i class="fa-solid fa-house"></i>
            Home
            
        </a>

        </li>

        <li>
            <a href="#" title="Game">
                <i class="fa-solid fa-gamepad"></i>
                Jogos
            </a>
        </li>

        <li>
            <a href="#" title="Sobre">
                <i class="fa-solid fa-info"></i>
                Desenvolvedores
            </a>
        </li>

        <li>
            <a href="#" title="Contato">
                <i class="fa-solid fa-mobile-screen-button"></i>
                Entre em Contato
            </a>
        </li>
    </ul>
    </nav>
</header>

<script>
    function mostrarMenu() {
        var menu = document.querySelector(".header-nav");
        menu.classList.toggle("show");
    }
</script>

<section class="slider">
        <div class="slider-content">
            
            <input type="radio" name="btn-radio" id="radio1">
            <input type="radio" name="btn-radio" id="radio2">
            <input type="radio" name="btn-radio" id="radio3">

            <div class="slide-box primeiro">
                <img class="img-desktop" src="img/1.jpg" alt="slide 1">
                <img class="img-mobile" src="img/slide-1-mob.jpg" alt="slide 1">
            </div>

            <div class="slide-box">
                <img class="img-desktop" src="img/2.jpg" alt="slide 3">
                <img class="img-mobile" src="img/slide-2-mob.jpg" alt="slide 1">
            </div>

            <div class="slide-box">
                <img class="img-desktop" src="img/3.jpg" alt="slide 3">
                <img class="img-mobile" src="img/slide-3-mob.jpg" alt="slide 3">
            </div>

            <div class="nav-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>

            <div class="nav-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>

        </div>
    </section>
 
    <section id="home">
        <div class="container1">
            <h2>Home</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum culpa et ad, itaque ipsum impedit ducimus vero fugit amet earum deserunt omnis possimus minima ipsam quia est quaerat illo quidem.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, repudiandae corporis possimus veritatis fugiat facilis nihil sapiente facere delectus ex vel voluptatibus cumque recusandae quaerat dignissimos. Illum, exercitationem recusandae? Cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias sapiente qui odio aspernatur vitae dolores ab optio accusamus sint pariatur, maxime facere ullam eveniet, reiciendis dolore quia rerum architecto.</p>
        </div>
    </section>

    <section id="sobre">
        <div class="container1">
            <h2>Sobre</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum culpa et ad, itaque ipsum impedit ducimus vero fugit amet earum deserunt omnis possimus minima ipsam quia est quaerat illo quidem.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, repudiandae corporis possimus veritatis fugiat facilis nihil sapiente facere delectus ex vel voluptatibus cumque recusandae quaerat dignissimos. Illum, exercitationem recusandae? Cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias sapiente qui odio aspernatur vitae dolores ab optio accusamus sint pariatur, maxime facere ullam eveniet, reiciendis dolore quia rerum architecto.</p>
        </div>
    </section>

    <section id="equipe">
        <div class="container1">
            <h2>Nossa Equipe</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum culpa et ad, itaque ipsum impedit ducimus vero fugit amet earum deserunt omnis possimus minima ipsam quia est quaerat illo quidem.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, repudiandae corporis possimus veritatis fugiat facilis nihil sapiente facere delectus ex vel voluptatibus cumque recusandae quaerat dignissimos. Illum, exercitationem recusandae? Cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias sapiente qui odio aspernatur vitae dolores ab optio accusamus sint pariatur, maxime facere ullam eveniet, reiciendis dolore quia rerum architecto.</p>
        </div>
    </section>

    <section id="servicos">
        <div class="container1">
            <h2>Serviços</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum culpa et ad, itaque ipsum impedit ducimus vero fugit amet earum deserunt omnis possimus minima ipsam quia est quaerat illo quidem.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, repudiandae corporis possimus veritatis fugiat facilis nihil sapiente facere delectus ex vel voluptatibus cumque recusandae quaerat dignissimos. Illum, exercitationem recusandae? Cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias sapiente qui odio aspernatur vitae dolores ab optio accusamus sint pariatur, maxime facere ullam eveniet, reiciendis dolore quia rerum architecto.</p>
        </div>
    </section>

    <section id="contato">
        <div class="container1">
            <h2>Contato</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum culpa et ad, itaque ipsum impedit ducimus vero fugit amet earum deserunt omnis possimus minima ipsam quia est quaerat illo quidem.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, repudiandae corporis possimus veritatis fugiat facilis nihil sapiente facere delectus ex vel voluptatibus cumque recusandae quaerat dignissimos. Illum, exercitationem recusandae? Cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias sapiente qui odio aspernatur vitae dolores ab optio accusamus sint pariatur, maxime facere ullam eveniet, reiciendis dolore quia rerum architecto.</p>
        </div>
    </section>

</body>
</html>