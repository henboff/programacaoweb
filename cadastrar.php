<?php
    include("conexao.php");

    $rg=$_POST["rg"];
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $endereco=$_POST["endereco"];
    $celular=$_POST["celular"];

    $sql = "INSERT INTO turma(RG,nome,email,endereco,celular) VALUES ('$rg','$nome','$email','$endereco','$celular')";

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