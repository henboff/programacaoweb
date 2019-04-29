<?php
$conteudo = "startup ";
$ponteiro = fopen("arquivo.txt", "a+"); //serve para abrir um arquivo
fwrite($ponteiro, $conteudo);
fclose($ponteiro);
echo '<script type="text/javascript">
window.location.reload()
</script>';
?>