<?php

echo "<p>Dificil</p>";

$arquivo = fopen('arquivo.txt' , 'A');

fwrite($arquivo, 'Ola Arquivo' . PHP_EOL);

fclose($arquivo);

echo '<hr>Escrito com Sucesso!</hr>';

echo "<p>Facil</p>";

file_put_contents("arquivo.txt", "End Of Live". PHP_EOL, FILE_APPEND);