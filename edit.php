<?php
include_once('conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM cargas WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    
    if ($result->num_rows > 0) {
        $user_data = mysqli_fetch_assoc($result);
        $desc = isset($user_data['descricao']) ? $user_data['descricao'] : '';
        $amount = isset($user_data['valor']) ? $user_data['valor'] : '';
        $type = isset($user_data['tipo']) ? $user_data['tipo'] : '';
    } else {
        header('Location: cargas.php');
    }
} else {
    header('Location: cargas.php');
}
?>



<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cargas | Motz</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/cargas.css">
    <!-- Bootstrap 5 -->
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
                                <a class="nav-link" href="embarcadores.php">Embarcadores</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link active" href="cargas.php">Cadastro de cargas</a>
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
    </header>
    <main class="container mt-5">
        <!-- input section -->
        <form action="saveEdit.php" method="post">
            <div class="newItem row">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label for="desc">Descrição da carga</label>
                    <input type="text" name="desc" class="form-control" value="<?php echo htmlspecialchars($desc); ?>" required>
                </div>
                <div>
                    <label for="amount">Valor da viagem</label>
                    <input type="text" name="valor" id="valor" class="form-control" value="<?php echo htmlspecialchars($amount); ?>" required>
                </div>
                <div>
                    <label for="type">Tipo da carga</label>
                    <select name="tipo" class="form-select">
                        <option value="Contêiner" <?php echo ($type == 'Contêiner') ? 'selected' : ''; ?>>Contêiner</option>
                        <option value="Frágil" <?php echo ($type == 'Frágil') ? 'selected' : ''; ?>>Frágil</option>
                        <option value="Geral" <?php echo ($type == 'Geral') ? 'selected' : ''; ?>>Geral</option>
                        <option value="Perigosa" <?php echo ($type == 'Perigosa') ? 'selected' : ''; ?>>Perigosa</option>
                    </select>
                </div>
                <button id="update" name="update" class="btn btn-primary w-25">Incluir</button>
            </div>
        </form>        
    </main>
</body>
</html>