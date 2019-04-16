<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<section>
  <article>
    <h1>Resultado da pesquisa</h1>
    <?php
    include("conexao.php");
    
    $pesquisar=$_POST['pesquisar'];
    
    $result_games="SELECT * FROM cadastro_games WHERE nome_game LIKE '%$pesquisar%' LIMIT 5";
    $resultado_games=mysqli_query($conexao, $result_games);
    
    while($rows_games=mysqli_fetch_array($resultado_games))
    
    {
        echo "Nome do Jogo: ".$rows_games['nome_game']."<br>";
        echo "Quantidade: ".$rows_games['quant_game']."<br>";
        echo "Valor: ".$rows_games['valor_game']."<br>";
        echo "<br>";
        
    }
    mysqli_close($conexao);
    ?>
  </article>
</section>


</body>
</html>
