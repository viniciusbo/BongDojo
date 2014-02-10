<?php
class FizzBuzz {
	public function gerar($n) {
		
		if ($n % 3 == 0 && $n % 5 == 0)
			return 'FizzBuzz';

		if ($n % 3 == 0)
			return 'Fizz';

		if ($n % 5 == 0)
			return 'Buzz';

		return $n;

	}
}

$fizzBuzz = new FizzBuzz();

for ($i=1; $i<=100; $i++){
	echo $fizzBuzz->gerar($i)."\n";
}