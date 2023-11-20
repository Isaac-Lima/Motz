<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embarcadores | Motz</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/embarcadores.css">
    <!--Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
    <!--Footer icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icon tab -->
    <link rel="shortcut icon" type="imagex/png" href="img/box-home.png">
</head>
<body>
    <header class="hero">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="index.php">
                    <img src="img/logo1-Motz.svg" alt="Logo da Motz" class="logo-img">
                </a>

                <!-- Toggle btn -->
                <button class="navbar-toggler shadow-none border-0k" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- SideBar -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <!-- SideBar Header -->
                    <div class="offcanvas-header border-bottom">
                        <img src="img/logo1-Motz.svg" alt="Logo da Motz" class="logo-img">
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <!--SideBar Body-->
                    <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                            <li class="nav-item mx-2">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="motoristas.php">Motoristas</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link active" href="embarcadores.php">Embarcadores</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="cargas.php">Cadastro de cargas</a>
                            </li>
                        </ul>
                        <!--Login/Cadastro-->
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                            <a href="cadastros.php"
                                class=" nav-btn text-white text-decoration-none px-3 py-1 rounded-4"
                                >Cadastro | Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero-content text-center">
            <h1 class="display-4">Tem carga?</h1>
            <p class="lead">Deixa com a gente que a gente carrega</p>
        </div>        
    </header>
    <main>
        <div class="container">
            <div class="parcerias row">
                <div class="col-md-6 mt-4 text-center">
                    <h3>Mais de 20 mil</h3>
                    <p>motoristas ativos na base</p>
                </div>
                <div class="col-md-6 mt-4 text-center">
                    <h3>Acompanhe sua carga</h3>
                    <p>com muito mais tecnologia</p>
                </div>
                <img class="parcerias-img" src="img/faixa-icones-embarcadores.png" alt="" srcset="">

                <h3 class="text-center mt-5">Confiança e segurança</h3>
                <p class="text-center">de uma empresa do grupo Votorantim Cimentos</p>
            </div>

            <div class="cta">
                <h2>Embarque nessa com a Motz</h2>
                <p>e tenha mais controle da sua carga</p>
            </div>
        </div>

        <div class="seguranca w-100 text-center mt-5">
            <div class="seguranca-content">
                <h2>É rápido e</h2>
                <h2>seguro</h2>
                <h2>É digital, é</h2>
            </div>
            <img src="img/logo2-Motz.png" alt="" srcset="">
        </div>

        <!-- Back to top button -->
        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </main>
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <!--Sobre Nós-->
                <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Sobre nós</h5>
                    <hr class="mb-4">
                    <p>Somos uma nova transportadora digital que chega ao mercado para transformar a jornada logística de motoristas e embarcadores para um modelo mais simples e rápido.</p>
                </div>

                <!--Serviços-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Serviços</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="index.php" class="footer-link">Home</a>
                    </p>
                    <p>
                        <a href="motoristas.php" class="footer-link">Motoristas</a>
                    </p>
                    <p>
                        <a href="embarcadores.php" class="footer-link">Embarcadores</a>
                    </p>
                    <p>
                        <a href="cadastros.php" class="footer-link">Cadastro | Login</a>
                    </p>
                </div>

                <!--Redes Sociais-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Redes Sociais</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="#" class="footer-link">
                            <i class="fa-brands fa-instagram"></i> Instagram
                        </a>
                    </p>
                    <p>
                        <a href="#" class="footer-link">
                            <i class="fa-brands fa-facebook"></i> Facebook
                        </a>
                    </p>
                    <p>
                        <a href="#" class="footer-link">
                            <i class="fa-brands fa-tiktok"></i> Tiktok
                        </a>
                    </p>
                    <p>
                        <a href="#" class="footer-link">
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                        </a>
                    </p>
                </div>

                <!--Contato-->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Contato</h5>
                    <hr class="mb-4">
                    <p>
                        <li class="fas fa-home mr-3 "></li> Rua Dr. Renato Paes de Barros, 33 - São Paulo SP
                    </p>
                    <p>
                        <li class="fas fa-envelope mr-3"></li> motz@motz.com.br
                    </p>
                    <p>
                        <li class="fas fa-phone mr-3"></li> 085 92222-4444
                    </p>
                </div>

                <hr class="mb-4">
                <div class="row d-flex justify-content-center">
                    <div>
                        <p>
                            Copyright 2023 Todos os direitos reservados por:
                            <a href="https://www.linkedin.com/in/isaac-silva-59061525b" target="_blank" style="text-decoration: none;">
                                <strong>Isaac Silva</strong>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://github.com/Isaac-Lima" class="footer-link" target="_blank" class="text-light">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/isaac-silva-59061525b" class="footer-link" target="_blank" class="text-light">
                                    <i class="fab fa-linkedin-in"></i> LinkedIn
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
    </footer>

    <script src="js/backToTop.js"></script>
</body>
</html>