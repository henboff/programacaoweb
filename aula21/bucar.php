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
    }
    ?>