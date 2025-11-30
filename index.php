<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>Seja bem vindo ao...</h1>
        <h3>EPCLIPSE FINAL</h3>

        <nav class="menu">
            <a href="index.php">Cadastro</a>
            <a href="dados.php">Usuários</a>
        </nav>
    </header>

    <br>

    <section>
        <h2>Crie seu aventureiro!</h2>

        <br>

        <form action="validar.php" method="post" id="usuarios">
            
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="campos" placeholder="Nome do Aventureiro" required>
            <br><br>
            
            <label for="idade">Idade</label>
            <input type="number" id="idade" name="idade" class="campos" placeholder="Qual a sua idade?" required>
            <br><br>
            
            <label for="classe">Selecione sua classe:</label>
            <select id="classe" name="classe" class="campos" required>
                <option value="" disabled selected>Clique para escolher</option>
                <option value="guerreiro">⚔️ Guerreiro</option>
                <option value="arqueiro">🏹 Arqueiro</option>
                <option value="mago">🧙‍♂️ Mago</option>
                <option value="feiticeiro">🧙 Feiticeiro</option>
                <option value="bardo">🎺 Bardo</option>
                <option value="ladino">🗡️ Ladino</option>                
            </select>
            <br><br>

            <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" class="campos textarea" placeholder="Descreva quem é seu personagem"></textarea>
            <br><br>
            
            <input type="submit" class="botao" name="cadastrar" value="Cadastrar">
        </form>
    </section>
</body>
</html>
