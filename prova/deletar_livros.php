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
  
    <?php
    include("conexao.php");
    
    $deletar=$_POST['deletar'];
    
    $sql="DELETE FROM plantas WHERE nome_vulgar='$deletar'";

    $resultado=mysqli_query($conexao, $sql);
    if($resultado)
    {
      echo "<h1>Plantinha excluida com sucesso</h1>";
    }
    else
    {
      echo "Plantinha não excluida". mysqli_error($conn);
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