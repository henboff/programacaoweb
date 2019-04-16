<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "games";
    //Comentário DELIRANTE
    $conexao=mysqli_connect($servidor,$usuario,$senha,$db);
    
    //Checar conexão

    if (!$conexao) {
        die ("E morreu, ocorreu um erro: ".mysqli_connect_errno);
    } 
    
?>