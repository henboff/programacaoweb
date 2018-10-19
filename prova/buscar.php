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
    <h1>Resultado da pesquisa</h1>
    <?php
    include("conexao.php");
    
    $pesquisar=$_POST['pesquisar'];
    
    $result_livros="SELECT * FROM plantas WHERE nome_vulgar LIKE '%$pesquisar%' LIMIT 5";
    $resultado_livros=mysqli_query($conexao, $result_livros);
    
    while($rows_livros=mysqli_fetch_array($resultado_livros))
    
    {
        echo "Nome vulgar: ".$rows_livros['nome_vulgar']."<br>";
        echo "Nome botânico: ".$rows_livros['nome_botanico']."<br>";
        echo "Família: ".$rows_livros['familia']."<br>";
        echo "Tipo: ".$rows_livros['tipo']."<br>";
        echo "Tempo de vida: ".$rows_livros['tempo_de_vida']."<br>";
        echo "Código: ".$rows_livros['codigo']."<br>";
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
