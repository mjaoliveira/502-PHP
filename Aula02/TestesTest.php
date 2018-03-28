<?php

// TestesTest.php

use PHPUnit\Framework\TestCase;

class TestesTest extends TestCase{

	// Testa se é idêntico
	public function testSame(){
		$soma = 2 + 2;

		$this -> assertSame(4,$soma);
	}

	//Testa se é verdadeiro(somente Boolean)
	public function testTrue(){
		$verdadeiro = true;

		$this -> assertTrue($verdadeiro);
	}

	//Testa se é falso
	public function testFalse(){
		$falso = false;

		$this -> assertFalse($falso);
	}

	//Testa se Count é igual
	public function testeCount(){
		$arr = ["a",1,true];

		$count = count($arr);

		$this -> assertSame(3,$count);
		$this -> assertCount(3,$arr);
	}

	// Testa se é vazio
	public function testEmpty(){
		// 0,"",false,[],null
		$vazio = "";

		$this -> assertEmpty($vazio);
	}

	//teste se é nulo
	public function testNull(){
		$vazio = null;

		$this -> assertNull($vazio);
	}

	//testa se é igual mas não indentico
	public function testEquals(){
		$a = "1";
		$b = 1;

		$this ->assertEquals($a,$b);
	}
}