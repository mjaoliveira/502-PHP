<?php

require_once 'Estoque.php';

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase{

	public function testAddItem(){

		$item = 'blusa azul';
		$qtd = 5;

		$estoque = new Estoque();
		$estoque -> add ($item,$qtd);

		$this -> assertSame($qtd, $estoque -> get($item));
	}

	public function testSomaQuantidades(){

		$item = 'blusa azul';

		$estoque = new Estoque();
		$estoque -> add ($item,1);
		$estoque -> add ($item,5);
		$estoque -> add ($item,10);

		$this -> assertSame(16, $estoque -> get($item));
	}

	/**
	 * @expectedException InvalidArgumentException
	 * @expectedExceptionMessage Item não existe no estoque
	 */
	public function testItemInvalido(){

		$estoque = new Estoque();
		$estoque -> get('blusa X');
	}

	public function testRemoveQuantidade(){

		$item = 'blusa Y';
		$estoque = new Estoque();
		$estoque -> add($item,10);
		$estoque -> add($item,8);
		$estoque -> add($item,7);
		

		$estoque -> remove($item,15);
		$this -> assertSame(10, $estoque -> get($item));
		$estoque -> remove($item,6);
		$this -> assertSame(4, $estoque -> get($item));
	}
}