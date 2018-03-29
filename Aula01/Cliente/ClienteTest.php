<?php

require_once 'Cliente.php';

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase{

	public function testCriacaoCliente(){

		$cliente = new Cliente('Marcelo', 29, 'marcelojorge.ba@gmail.com');

		$this -> assertSame('Marcelo', $cliente -> getNome());
		$this -> assertSame(29, $cliente -> getIdade());
		$this -> assertSame('marcelojorge.ba@gmail.com', $cliente -> getEmail());

	}
}