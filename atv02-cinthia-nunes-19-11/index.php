<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
<header>

    <img src="imagem/esquerda.png" alt="Lateral Esquerda" class="header-image">
    <div class="header-content">
      <h1>FORMULÁRIO</h1>
    </div>
    <img src="imagem/direita.png" alt="Lateral Direita" class="header-image">

  </header>

  <main>
    <form id="f2">
      <label for="fname">Nome: </label>
      <input type="text" id="t1" name="Nome" placeholder="Seu nome" required>

      <label for="fname">Sobrenome: </label>
      <input type="text" id="t1" name="Sobrenome" placeholder="Seu sobrenome" required>

      <label for="email">Informe seu e-mail: </label>
      <input type="email" id="email" name="email" placeholder="email" required>

      <label for="birthdate">Data de nascimento: </label>
      <input type="date" id="birthdate" name="DataDeNascimento" required>

      <label for="password">Digite uma senha: </label>
      <input type="password" id="password" name="Senha" placeholder="senha" required>

      <fieldset>
        <legend>Sinalize sua cor:</legend>
        <label><input type="radio" name="cor" value="Branco"> Branco</label>
        <label><input type="radio" name="cor" value="Negro"> Negro</label>
        <label><input type="radio" name="cor" value="Pardo"> Pardo</label>
      </fieldset>

      <fieldset>
        <legend>Seu gênero?</legend>
        <label><input type="checkbox" name="Filhos" value="Feminino"> Feminino</label>
        <label><input type="checkbox" name="Filhos" value="Masculino"> Masculino</label>
        <label><input type="checkbox" name="Filhos" value="Outro"> Outro</label>
      </fieldset>

      <label for="corfav">Selecione sua cor favorita:</label>
      <input type="color" id="corfav" name="corfav" value="#ff0000">

      <label for="atendimento">Marcar atendimento:</label>
      <input type="datetime-local" id="atendimento" name="Atendimento" required>

      <label for="arquivo">Anexe seus documentos:</label>
      <input type="file" id="arquivo" name="arquivo">

      <label for="avaliação">Avalie o atendimento:</label>
      <input type="range" id="avaliação" name="avaliação" min="0" max="10">

      <label for="pesquisa">Deixe suas dúvidas aqui:</label>
      <input type="search" id="pesquisa" name="pesquisa">

      <label for="telefone">Insira seu número de telefone:</label>
      <input type="tel" id="telefone" name="telefone" placeholder="00-0000-0000" required>

      <label for="hora">Selecione o melhor horário:</label>
      <input type="time" id="hora" name="hora">

      <label for="Data">Selecione a melhor data para o evento:</label>
      <input type="week" id="Data" name="Data" required>

      <div class="form-buttons">
        <input type="reset" value="Voltar">
        <input type="submit" value="Enviar">
      </div>
    </form>
  </main>

  <footer>
  <div class="footer">
        <div class="footer-info">
            <p>Site desenvolvido por Cinthia Nunes dos Anjos</p>
            <p>&copy; 2024. Todos os direitos reservados.</p>
        </div>
  </footer>
</body>
</html>

