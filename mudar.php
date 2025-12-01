<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Eclipse Final</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Inter:wght@300;400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="wrap-centered">
  <div class="center-column">
    <div class="top-gray col-header">
      <div class="col-logo"><img src="imgs/image0.png" alt="logo" style="width:100%;height:100%;object-fit:cover;border-radius:6px;"></div>
      <h1 class="col-title">ECLIPSE FINAL</h1>
<nav class="col-nav" style="display:flex; gap:12px;">
    <?php if(isset($_SESSION['user_id'])): ?>
        <a class="btn big" href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
    <?php else: ?>
        <a href="cadastro_notfound.php" class="btn big">Cadastro</a>
    <?php endif; ?>
</nav>




  </div>
    <div class="spacer-below"></div>
    <section class="col-hero">
      <div class="grid-row">
  
      </div>
      <article class="hero-card">
        <div class="hero-img"><img src="imgs/image1.png" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:8px;"></div>
        <div class="hero-txt">Na Terra do Sol existe um reino próspero e radiante, onde o povo vive em harmonia e abundância. Fértil e repleto de riquezas, é o lar de guerreiros e aventureiros — este é o IMPÉRIO.</div>
      </article>

      <article class="hero-card">
        <div class="hero-img"><img src="imgs/image2.png" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:8px;"></div>
        <div class="hero-txt">Nas profundezas onde a luz não alcança vive uma legião de criaturas deformadas pelas trevas. Nada cresce ali; o solo é morto e a água, venenosa. É o domínio das sombras, onde apenas o desespero existe.</div>
      </article>

      <article class="hero-card">
        <div class="hero-img"><img src="imgs/image3.png" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:8px;"></div>
    <div class="hero-txt">As criaturas das sombras jamais aceitaram a humanidade. Para elas, humanos eram uma afronta. Guiadas por Nekharu, o Rei Abissal, ergueram-se para devorar carne, espalhar terror e extinguir todo vestígio humano.</div>

      </article>

      <article class="hero-card">
        <div class="hero-img"><img src="imgs/image4.png" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:8px;"></div>
        <div class="hero-txt">A invasão de Nekharu deixou o mundo em ruínas. A humanidade está à beira do fim… até que uma voz sussurra o seu nome.
‘Levante-se.’
Uma força desperta dentro de você — a última chama contra as trevas. Agora, cabe a você proteger o que resta e enfrentar o Rei das Sombras.
Você será a esperança que o mundo precisa?
 
 </div>
      </article>
    </section>

    <section class="col-characters">
      <h2>PERSONAGENS</h2>
      <div class="chars-row">
        <a class="char-card" href="personagem.php?id=1"><div class="char-img"><img src="imgs/image5.png" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:8px;"></div><div class="char-name">Juan</div></a>
        <a class="char-card" href="personagem.php?id=2"><div class="char-img"><img src="imgs/image6.png" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:8px;"></div><div class="char-name">Ítalo</div></a>
        <a class="char-card" href="personagem.php?id=3"><div class="char-img"><img src="imgs/image7.png" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:8px;"></div><div class="char-name">Kauã</div></a>
      </div>
    </section>

    <section class="col-about">
      <h2>SOBRE O JOGO</h2>
      <div class="about-box gray-box">
        <div class="about-content">
          Num mundo Eclipse Final, reinos esquecidos lutam pela última luz — aventure-se e descubra segredos que moldam o destino.
          <br><br>
          Eclipse Final é um jogo Roguelike aonde você escolhe seu próprio personagem. Explore o mundo enquanto se diverte encontrando diversos equipamentos e melhorias para seu personagem. Erga se e se torne o heroi desse mundo. 
        </div>
      </div>
    </section>

    <div class="center-column-footer footer-inside">
      &copy; <?php echo date('Y'); ?> Eclipse Final
    </div>

  </div>
</main>


