<?php

$linha = 'col1;col2,col3.col4/col5';

$cols =  preg_split('/;|,|\.|\//', $linha);

print_r($cols);

echo "<hr>";

$data = "25-07-1993 12:12:12";

$cols = preg_split("/-|:| /", $data);

print_r($cols);