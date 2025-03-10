<?php
$cadastrados = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = [
        'nome' => $_POST['nome'] ?? '',
        'endereco' => $_POST['endereco'] ?? '',
        'bairro' => $_POST['bairro'] ?? '',
        'cidade' => $_POST['cidade'] ?? '',
        'uf' => $_POST['uf'] ?? '',
        'celular' => $_POST['celular'] ?? '',
        'cpf' => $_POST['cpf'] ?? '',
        'disciplinas' => isset($_POST['disciplinas']) ? $_POST['disciplinas'] : [],
        'favoritas' => isset($_POST['favoritas']) ? $_POST['favoritas'] : []
    ];


    $cadastrados[] = $aluno;
}


if (isset($_POST['deletar'])) {
    $cadastrados = [];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">Sistema de Alunos</div>
        <nav>
            <a href="index.php" class="button-link">Home</a>
            <a href="cadaluno.php" class="button-link">Cadastro</a>
        </nav>
    </header>
    <table id="tabelaAlunos">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Celular</th>
                <th>CPF</th>
                <th>Disciplinas</th>
                <th>Favoritas</th>
            </tr>
            <tr>
                <td>Cinthia</td>
                <td>praça</td>
                <td>centro</td>
                <td>mamonas</td>
                <td>MG</td>
                <td>38 99562-3216</td>
                <td>321.632.163-50</td>
                <td>Disciplinas</td>
                <td>Favoritas</td>
            </tr>
            <?php foreach ($cadastrados as $aluno): ?>
                <tr>
                    <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['endereco']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['bairro']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['cidade']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['uf']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['celular']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['cpf']); ?></td>
                    <td><?php echo implode(', ', $aluno['disciplinas']); ?></td>
                    <td><?php echo implode(', ', $aluno['favoritas']); ?></td>
                </tr>
            <?php endforeach; ?>
        </thead>
    </table>
    <div class="botao-excluir">
        <form action="listaaluno.php" method="post">
            <button type="submit" name="deletar">Deletar campos</button>
        </form>
    </div>
    <footer class="footer-listaaluno">
        <p>&copy; 2024 - Cinthia Nunes. Todos os direitos reservados.</p>
    </footer>
</body>

</html>


