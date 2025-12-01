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
            <a href="cadastro.php">Cadastro</a>
            <a href="dados.php">Personagens</a>
        </nav>
    </header>
    
    <br>

    <section>
        <img class="imagens" src="img/1.jpg" alt="imagem do reino">
        <h5>
            Na Terra do Sol existe um reino próspero e radiante, onde o povo vive em harmonia e abundância. Fértil e repleto de riquezas, é o lar de guerreiros e aventureiros — este é o IMPÉRIO.
        </h5>
    </section>

    <section>
        <img class="imagens" src="img/3.png" alt="solo morto">
        <h5>
            Nas profundezas onde a luz não alcança vive uma legião de criaturas deformadas pelas trevas. Nada cresce ali; o solo é morto e a água, venenosa. É o domínio das sombras, onde apenas o desespero existe.
        </h5>
    </section>

    <section>
        <img class="imagens" src="img/4.png" alt="imagem da criatura">
        <h5>
            As criaturas das sombras jamais aceitaram a humanidade. Para elas, humanos eram uma afronta. Guiadas por Nekharu, o Rei Abissal, ergueram-se para devorar carne, espalhar terror e extinguir todo vestígio humano.
        </h5>
    </section>

    <section>
        <img class="imagens" src="img/5.png" alt="imagem da criatura">
        <h5>
        A invasão de Nekharu deixou o mundo em ruínas. A humanidade está à beira do fim… até que uma voz sussurra o seu nome. 
        <p>"Levante-se".</p>
        </h5>
    </section>

    <section>
        <h5>
            Uma força desperta dentro de você — a última chama contra as trevas. Agora, cabe a você proteger o que resta e enfrentar o Rei das Sombras.
        </h5>
        <br>
        <h5>
            Você será a esperança que o mundo precisa?
        </h5>
    </section>

<h2>PERSONAGENS</h2>

<section class="section2">
    <div class="personagem">
        <h2>JUAN</h2>
        <a href="personagens.php"><img class="imagens-personagem" src="img/6.png"></a>
    </div>
    <div class="personagem">
        <h2>ÍTALO</h2>
        <a href="personagens.php"><img class="imagens-personagem" src="img/7.png"></a>
    </div>
    <div class="personagem">
        <h2>KAUÃ</h2>
        <a href="personagens.php"><img class="imagens-personagem" src="img/8.png"></a>
    </div>
</section>

<h2>SOBRE O JOGO</h2>

    <section>
        <h5>
            Num mundo Eclipse Final, reinos esquecidos lutam pela última luz — aventure-se e descubra segredos que moldam o destino.
        </h5>
        <br>
        <h5>
            Eclipse Final é um jogo Roguelike aonde você escolhe seu próprio personagem. Explore o mundo enquanto se diverte encontrando diversos equipamentos e melhorias para seu personagem. 
        </h5>
        <br>
        <h5>
            Erga se e se torne o heroi desse mundo. 
        </h5>
    </section>
    <div>
      &copy; <?php echo date('Y'); ?> Eclipse Final
    </div>
</body>
</html>
