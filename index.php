<?php

include('conexao.php');

$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Cadastrar Aluno</h1>
    <form action="inserir.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Alunos Cadastrados</h2>
    <ul>
        <?php while ($aluno = $result->fetch_assoc()): ?>
            <li>
                <?php echo $aluno['nome'] . " - " . $aluno['email']; ?>
                <a href="excluir.php?id=<?php echo $aluno['id']; ?>" onclick="return confirm ('Tem certeza que deseja excluir?')">[Excluir]</a>
            </li>
            <?php endwhile; ?>
    </ul>
</body>
</html>