<?php
    include("conexao.php");

    $nome=$_POST["nome"];
    $quantidade=$_POST["quantidade"];
    $valor=$_POST["valor"];

    $sql = "INSERT INTO cadastro_games(nome_game,quant_game,valor_game) VALUES ('$nome',$quantidade,$valor)";

    if(mysqli_query($conexao, $sql))
    {
        echo "Dados cadastrados com sucesso";
        echo " <a href='cadastro.php'>voltar</a>";
    }
    else
    {
        echo "Erro: ".$sql."<br>".mysqli_error($conexao)." É essa parada aí.";
    }

?>