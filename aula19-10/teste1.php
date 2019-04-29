<?php

$meuCaminho="prova.txt";
$meuArquivo=fopen($meuCaminho, "a+");
fwrite($meuArquivo, "Programacao Web ");
$meuArquivo=fopen($meuCaminho, "a+");
echo fread($meuCaminho, 10);

?>