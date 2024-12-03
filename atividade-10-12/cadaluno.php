<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <header>
        <img src="img/esquerda.png" alt="Lateral Esquerda" class="header-image">
        <div class="header-content">
            <h1>FORMULÁRIO</h1>
        </div>
        <img src="img/direita.png" alt="Lateral Direita" class="header-image">
    </header>

    <main>
        <form id="f2" action="/submit" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="Seu endereço" required>

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" placeholder="Seu bairro" required>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Sua cidade" required>

            <label for="uf">UF:</label>
            <input type="text" id="uf" name="uf" placeholder="Estado (UF)" maxlength="2" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" 
                   required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite no formato 000.000.000-00">

            <label for="celular">Celular:</label>
            <input type="tel" id="celular" name="celular" placeholder="(00) 90000-0000" 
                   required pattern="\(\d{2}\) \d{5}-\d{4}" title="Digite no formato (00) 90000-0000">

            <label for="zap">WhatsApp:</label>
            <input type="tel" id="zap" name="zap" placeholder="(00) 90000-0000" 
                   required pattern="\(\d{2}\) \d{5}-\d{4}" title="Digite no formato (00) 90000-0000">

            <label for="datanascimento">Data de Nascimento:</label>
            <input type="date" id="datanascimento" name="datanascimento" required>

            <label for="disciplinascursadas">Disciplinas Cursadas:</label>
            <textarea id="disciplinascursadas" name="disciplinascursadas" placeholder="Digite as disciplinas cursadas" required></textarea>

            <label for="disciplinaspreferidas">Disciplinas Preferidas:</label>
            <textarea id="disciplinaspreferidas" name="disciplinaspreferidas" placeholder="Digite as disciplinas preferidas" required></textarea>

            <div class="form-buttons">
                <input type="reset" value="Voltar">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>
    <body>


    <footer>
        <div class="footer-info">
            <p>Site desenvolvido por Cinthia Nunes dos Anjos</p>
            <p>&copy; 2024. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
