<?php

$apostilas = new SimpleXMLElement('../apostilas.xml',null,true);

$apostilas -> apostila[0] -> titulo = 'Dominando PHP';

$apostilas -> apostila[1] -> topicos -> topico[0] = 'Iniciando com Java';

$apostilas ->saveXML('../apostilas.xml');

header('Content_type: text/xml');

echo $apostilas -> asXML();