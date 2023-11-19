
<?php
session_start();

// Conexão com o banco de dados
include_once('conexao.php');

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recupera os dados do formulário
$email = $_POST['email'];
$password = $_POST['senha'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido
    $_SESSION['logged_in'] = true;
    header('location: index.php?');
} else {
    // Login falhou    
    header('location: cadastros.php?');
}

$conn->close();
?>

