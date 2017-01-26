<?php
$fp = fopen('data.txt', 'w');
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);

// o conteúdo de 'data.txt' agora é 123 e não 23!
?>