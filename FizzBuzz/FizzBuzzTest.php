<?php
use PHPUnit_Framework_TestCase as PHPUnit;

require 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit {
	protected $fizzBuzz;

	public function setUp() {
		// Instancia a classe FizzBuzz
		$this->fizzBuzz = new FizzBuzz();
	}

	public function testNumeroUm() {
		// Teste para numero um
		$this->assertEquals(1, $this->fizzBuzz->gerar(1));
	}

	public function testNumeroTres() {
		// Teste para numero divisível por três
		$this->assertEquals('Fizz', $this->fizzBuzz->gerar(3));
	}

	public function testNumeroCinco() {
		// Teste para numero divisivel por cinco
		$this->assertEquals('Buzz', $this->fizzBuzz->gerar(5));
	}

	public function testNumeroTreseCinco() {
		// Teste para numero divisivel por tres e cinco
		$this->assertEquals('FizzBuzz', $this->fizzBuzz->gerar(15));
	}
}