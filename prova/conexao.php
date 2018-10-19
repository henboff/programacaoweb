<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="planta";
    
    //criar conexao
    $conexao=mysqli_connect($servidor, $usuario,$senha, $dbname);
    
    //checar conexao
    if(!$conexao)
    {
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>