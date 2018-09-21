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
    <h2>Atualizar livros</h2>
    <form method="POST" action="atualizar_livros.php">
        ISBN para atualização:<input type="text" name="isbn"><br><br>
        Título:<input type="text" name="titulo"><br><br>
        Autor:<input type="text" name="autor"><br><br>
        Preço:<input type="text" name="preco"><br><br>
        <input type="submit" value="ATUALIZAR">
    </form>
  </article>
</section>

<footer>
  <p>© copyright programação web</p>
</footer>

</body>
</html>
