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
    <h2>Excluir livros cadastrados</h2>
    
    <form method="POST" action="deletar_livros.php">
        Digite o nome do livro que deseja apagar:
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