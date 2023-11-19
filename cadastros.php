<?php

// Inclue a conexão ao banco de dados
include_once('conexao.php');


// Verifica se o formulário foi enviado


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se as variáveis do formulário estão definidas
    if (isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha'])) {
        // Recupera os dados do formulário
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Instrução preparada para evitar SQL injection
        $sql = $conexao->prepare("INSERT INTO cadastro (usuario, email, senha) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $usuario, $email, $senha);

        if ($sql->execute()) {
            header('location: index.php?');
            
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }

        $sql->close();
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro | Motz</title>
    <!--Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
    <!--CSS-->
    <link rel="stylesheet" href="css/cadastros.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Icon tab -->
    <link rel="shortcut icon" type="imagex/png" href="img/box-home.png">
    </head>

<body>
    <header>
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
                                <a class="nav-link" href="embarcadores.php">Embarcadores</a>
                            </li>
                        </ul>
                        <!--Login/Cadastro-->
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                            <a href="cadastros.php"
                                class=" nav-btn text-white text-decoration-none px-3 py-1 rounded-4"
                                >Cadastro | Login </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <!-- blue circle background -->
    <div class="d-none d-md-block ball register bg-primary bg-gradient position-absolute rounded-circle"></div>

    <!-- Register Section -->
    <div class="container register__form active">
        <div class="row vh-100 w-100 align-self-center">
            <div class="d-none d-lg-block col-lg-6 col-xl-6 p-5">
                <div class="row vh-100 p-5">
                    <div class="col align-self-center p-5 text-center">
                        <img src="img/register.png" class="bounce" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 px-5">
                <div class="row vh-100">
                    <div class="col align-self-center p-5 w-100">
                        <h3 class="fw-bolder">CADASTRE-SE AQUI !</h3>
                        <p class="fw-lighter fs-6">Possui uma conta ? <span id="signIn" role="button" class="text-primary">Faça o login aqui</span></p>
                        <!-- form register section -->
                        <form action="cadastros.php" method="POST" class="mt-5">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nome de usuário</label>
                                <input type="text" name="usuario" class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" placeholder="nome1" required required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" placeholder="nome@gmail.com" required required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Senha</label>
                                <div class="d-flex position-relative">
                                    <input type="password" name="senha" class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" required required>
                                    <span class="password__icon text-primary fs-4 fw-bold bi bi-eye-slash"></span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <button type="submit" name="submit" class="btn btn-outline-dark btn-lg rounded-pill mt-4 w-100">Cadastre-se</button>
                            </div>
                        </form>
                        <p class="mt-5 text-center">Ou cadastre-se com suas redes sociais</p>
                        <div class="row text-center">
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-facebook fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-linkedin fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-twitter fs-5"></i></a>
                            </div>
                            <div class="col my-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-google fs-5"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Section -->
    <div class="container login__form  mt-5">
        <div class="row vh-100 w-100 align-self-center">
            <div class="col-12 col-lg-6 col-xl-6 px-5">
                <div class="row vh-100">
                    <div class="col align-self-center p-5 w-100">
                        <h3 class="fw-bolder">BEM-VINDO DE VOLTA !</h3>
                        <p class="fw-lighter fs-6">Não tem uma conta ?<span id="signUp" role="button" class="text-primary"> cadastre-se aqui</span></p>
                        <!-- form login section -->
                        <form action="validaLogin.php" method="POST" class="mt-5">
                            <div class="mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" placeholder="nome@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Senha</label>
                                <div class="d-flex position-relative">
                                    <input type="password" name="senha" class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" required>
                                    <span class="password__icon text-primary fs-4 fw-bold bi bi-eye-slash"></span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-outline-dark btn-lg rounded-pill mt-4 w-100">Login</button>
                            </div>
                        </form>
                        <p class="mt-5 text-center">Ou entre com suas redes sociais:</p>
                        <div class="row text-center">
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-facebook fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-linkedin fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-twitter fs-5"></i></a>
                            </div>
                            <div class="col my-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-google fs-5"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6 col-xl-6 p-5">
                <div class="row vh-100 p-5">
                    <div class="col align-self-center p-5 text-center">
                        <img src="img/login.png" class="bounce" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <script src="js/cadastros.js"></script>
</body>
</html>

</body>
</html>