<?php
require_once ('conexao.php');

$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

// Consulta SQL para buscar dados
$sql = 'SELECT * FROM usuarios';
$resultado = mysqli_query($link, $sql);
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Usuários</title>
</head>
<body>

<header>
    <h1>Seja bem vindo ao...</h1>
    <h3>EPCLIPSE FINAL</h3>

    <nav class="menu">
        <a href="index.php">Página inicial</a>
        <a href="personagens.php">Personagens</a>
        <a href="cadastro.php">Cadastro</a>
    </nav>
</header>

<section>
    <h2>Lista de Usuários</h2>
    <br>

    <?php if(mysqli_num_rows($resultado) > 0): ?>
    
    <table class="tabela-usuarios">
        <tr class="tabela-cabecalho">
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Classe</th>
            <th>Descrição</th>
        </tr>

        <?php while($linha = mysqli_fetch_array($resultado)): ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['idade']; ?></td>
                <td><?php echo $linha['classe']; ?></td>
                <td><?php echo $linha['descricao']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php else: ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php endif; ?>

    <a href="index.php" class="botao-voltar">Voltar</a>

</section>  
    <footer>
        <div>
            <h5>Todos os direitos reservados &copy; <?php echo date('Y'); ?> Eclipse Final</h5>
        </div>
    </footer>
</body>
</html>
