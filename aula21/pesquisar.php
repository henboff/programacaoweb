<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Biblioteca</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<header>
  <h2>Minha biblioteca</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="cadastrar.php">Cadastrar livros</a></li>
      <li><a href="pesquisar.php">Pesquisar livros</a></li>
      <li><a href="atualizar.php">Atualizar livros</a></li>
      <li><a href="deletar.php">Deletar livros</a></li>
      <li><a href="index.html">Home page</a></li>
    </ul>
  </nav>
  
  <article>
    <h2>Pesquisar livros cadastrados</h2>
    <form method="POST" action="buscar.php">
        Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
        <input type="submit" value="PESQUISAR">
    </form>
  </article>
</section>

<footer>
  <p>© copyright programação web</p>
</footer>

</body>
</html>
