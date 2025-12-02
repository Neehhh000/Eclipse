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
</header>

<?php

require_once('conexao.php');

// RECEBE OS DADOS DO FORMULÁRIO
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$classe = $_POST['classe'];
$descricao = $_POST['descricao'];

$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

// MONTA O INSERT NO BANCO
$sql = "INSERT INTO usuarios (nome, idade, classe, descricao)
        VALUES ('$nome', '$idade', '$classe', '$descricao')";

if (mysqli_query($link, $sql)) {
    $mensagem = "Cadastro realizado com sucesso!";
} else {
    $mensagem = "Erro ao cadastrar: " . mysqli_error($link);
}

?>

<section>
    <h2>CADASTRO</h2>
    <br>

    <h1><?php echo $mensagem; ?></h1>

    <br><br><br><br>

    <a href="index.php" class="botao">Retornar</a>
</section>

    <footer>
        <div>
            <h5>Todos os direitos reservados &copy; <?php echo date('Y'); ?> Eclipse Final</h5>
        </div>
    </footer>

</body>
</html>
