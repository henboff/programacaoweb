<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Plantando Amor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<header>
  <h2>Plantando Amor</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="cadastrar.php">Cadastrar novas plantas</a></li>
      <li><a href="pesquisar.php">Pesquisar por plantas</a></li>
      <li><a href="atualizar.php">Atualizar uma planta</a></li>
      <li><a href="deletar.php">Deletar alguma planta</a></li>
      <li><a href="index.html">Home page</a></li>
    </ul>
    </nav>
  
  <article>
    <h2>Cadastrar uma nova planta</h2>
    <form method="POST" action="cadastrar_plantas.php">
        Nome botânico:<input type="text" name="nome_botanico"><br><br>
        Nome vulgar:<input type="text" name="nome_vulgar"><br><br>
        Familia:<input type="text" name="familia"><br><br>
        Tipo:<input type="text" name="tipo"><br><br>
        Tempo de vida:<input type="text" name="tempo_de_vida"><br><br>
        Clima:<input type="text" name="clima"><br><br>
        <input type="submit" value="CADASTRAR">
    </form>
  </article>
</section>

<footer>
  <p>© copyright programação web</p>
</footer>

</body>
</html>
