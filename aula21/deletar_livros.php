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
  
    <?php
    include("conexao.php");
    
    $deletar=$_POST['deletar'];
    
    $sql="DELETE FROM livros WHERE titulo='$deletar'";

    $resultado=mysqli_query($conexao, $sql);
    if($resultado)
    {
      echo "<h1>Livro excluido com sucesso</h1>";
    }
    else
    {
      echo "Livro não excluido". mysqli_error($conn);
    }
    mysqli_close($conexao);
    ?>
  </article>
</section>

<footer>
  <p>© copyright programação web</p>
</footer>

</body>
</html>