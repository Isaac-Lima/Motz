<?php
include_once('conexao.php');


$sql = "SELECT * FROM cargas ORDER BY id DESC";

$result = $conexao->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se as variáveis do formulário estão definidas
    if (isset($_POST['desc']) && isset($_POST['valor']) && isset($_POST['tipo'])) {
        // Recupera os dados do formulário
        $desc = $_POST['desc'];
        $amount = $_POST['valor'];
        $type = $_POST['tipo'];

        // Instrução preparada para evitar SQL injection
        $sql = $conexao->prepare("INSERT INTO cargas (descricao, valor, tipo) VALUES ( ?, ?, ?)");
        $sql->bind_param("sss", $desc, $amount, $type);

        if ($sql->execute()) {
            echo "<script>alert('Dados incluídos com sucesso');</script>";            
        } else {
            echo "<script>alert('Erro na inclusão dos dados');</script>";        }

        $sql->close();
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
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
        <!-- rent information -->
        <div class="resume">
            <div class="col">
                Entradas: R$ <span class="incomes">0.00</span>
            </div>
            <div class="col">
                Saídas: R$ <span class="expenses">0.00</span>
            </div>
            <div class="col">
                Total: R$ <span class="total">0.00</span>
            </div>
        </div>
        <!-- input section -->
        <form action="cargas.php" method="post">
            <div class="newItem row">
                <div class="col">
                    <label for="desc">Descrição</label>
                    <input type="text" name="desc" class="form-control">
                </div>
                <div class="col">
                    <label for="amount">Valor</label>
                    <input type="number" name="valor" class="form-control">
                </div>
                <div class="col">
                    <label for="type">Tipo</label>
                    <select name="tipo" class="form-select">
                        <option value="Entrada">Entrada</option>
                        <option value="Saída">Saída</option>
                    </select>
                </div>
                <button id="btnNew" class="btn btn-primary w-25">Incluir</button>
            </div>
        </form>

        <!-- products information -->
        <div class="divTable mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" .$user_data['id']."</td>";
                            echo "<td>" .$user_data['descricao']."</td>";
                            echo "<td>" .$user_data['valor']."</td>";
                            echo "<td>" .$user_data['tipo']."</td>";
                            echo "<td>" .$user_data['acoes']."</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>