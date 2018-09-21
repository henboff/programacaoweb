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
    <h1>Resultado da pesquisa</h1>
    <?php
    include("conexao.php");
    
    $pesquisar=$_POST['pesquisar'];
    
    $result_livros="SELECT * FROM livros WHERE titulo LIKE '%$pesquisar%' LIMIT 5";
    $resultado_livros=mysqli_query($conexao, $result_livros);
    
    while($rows_livros=mysqli_fetch_array($resultado_livros))
    
    {
        echo "Isbn: ".$rows_livros['isbn']."<br>";
        echo "Nome do livro: ".$rows_livros['titulo']."<br>";
        echo "Autor: ".$rows_livros['autor']."<br>";
        echo "Preço: ".$rows_livros['preco']."<br>";
        echo "<br>";
        
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
