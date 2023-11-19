
<?php
session_start();

// Conexão com o banco de dados
include_once('conexao.php');

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Recupera os dados do formulário
$email = $_POST['email'];
$password = $_POST['senha'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$password'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido
    $_SESSION['logged_in'] = true;
    header('location: index.php?');
} else {
    // Login falhou    
    echo "<script>alert('Email ou senha incorretos');</script>";
}

$conexao->close();
?>

