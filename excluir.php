<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao excluir: " . $conn->error;
}