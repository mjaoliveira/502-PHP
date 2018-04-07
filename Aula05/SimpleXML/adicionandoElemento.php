<?php

$apostilas = new SimpleXMLElement('../apostilas.xml',null,true);

$apostilas -> apostila[0] -> addChild('paginas',140);
$apostilas -> apostila[1] -> addChild('paginas',128);
$apostilas -> apostila[2] -> addChild('paginas',162);

$apostilas ->saveXML('../apostilas.xml');

header('Content_type: text/xml');

echo $apostilas -> asXML();