<?php
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO alunos (`nome`, `email`) VALUES (?, ?)";
$smtm = $conn->prepare($sql);
$smtm->bind_param("ss", $nome, $email);

if($smtm->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao inserir: " . $conn->error;
}
