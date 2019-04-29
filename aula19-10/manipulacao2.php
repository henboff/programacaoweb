<?php
//CRIA PASTA
mkdir('miguel');
//rmdir('miguel'); //apaga pastinha

$arquivo = fopen("miguel.txt", "w+");
fwrite($arquivo, "Testando 123");

echo filesize("miguel.txt");
$texto=fread($arquivo,100);

echo "<br>".$texto;
?>