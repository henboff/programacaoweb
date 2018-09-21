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
    
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $isbn=$_POST['isbn'];
    $preco=$_POST['preco'];
    
    $sql="INSERT INTO livros (isbn, titulo, autor, preco) VALUES ($isbn, '$titulo', '$autor', $preco)";
    
    if(mysqli_query($conexao, $sql))
    {
      echo "<h1>Livro cadastrado com sucesso</h1>";
    }
    else
    {
      echo "Error: ".$sql."<br>".mysqli_error($conexao);
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