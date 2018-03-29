<?php

echo "<p>Dificil</p>";

$arquivo = fopen('arquivo.txt', 'r'); // fopen - abrir arquivo
while (!feof($arquivo)) { // feof - final do arquivo
	$linha = fgets($arquivo); // fgets - pegar linha do arquivo
	echo nl2br($linha);
}


fclose($arquivo); // fclose - fecha arquivo

echo "<hr>";

echo "<p>facil</p>";

$arquivo = file_get_contents('arquivo.txt');
echo nl2br($arquivo);

echo "<hr>";

echo "<p> Lendo arquivo em partes </p>";

$arquivo = fopen('arquivo.txt', 'r');

while (($pedaco = fread($arquivo, 10)) != false) {
	echo nl2br($pedaco);
}

fclose($arquivo);