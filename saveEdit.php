<?php
include_once('conexao.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $desc = $_POST['desc'];
    $amount = $_POST['valor'];
    $type = $_POST['tipo'];

    // Use prepared statements para evitar injeção de SQL
    $sqlUpdate = $conexao->prepare("UPDATE cargas SET descricao=?, valor=?, tipo=? WHERE id=?");
    $sqlUpdate->bind_param("sssi", $desc, $amount, $type, $id);

    if ($sqlUpdate->execute()) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: " . $sqlUpdate->error;
    }

    $sqlUpdate->close();
}

header('Location: cargas.php');
?>
