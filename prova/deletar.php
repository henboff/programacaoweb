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
    <h2>Excluir plantinhas cadastradas</h2>
    
    <form method="POST" action="deletar_livros.php">
        Digite o nome vulgar da plantinha que deseja apagar:<br><br>
        <input type="text" name="deletar" placeholder="EXCLUIR">
        <input type="submit" value="DELETAR">
    </form>
    
  </article>
</section>

<footer>
  <p>© copyright programação web</p>
</footer>

</body>
</html>