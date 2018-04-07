<?php

$app -> get('/', function(){

	return \Marcelo\Controller\Action\Say::hello();
});