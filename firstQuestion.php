<?php

	for ($contador = 1;$contador <=100 ; $contador++) {
		$multiplo3 = ($contador % 3) == 0;
		$multiplo5 = ($contador % 5) == 0;
		if($multiplo3) {
			echo "Fizz<br>";
		}
		if($multiplo5) {
			echo "Buzz<br>";
		}
		if($multiplo3 and $multiplo5){
			echo  "FizzBuzz<br>"; 
		}
		if(!$multiplo3 and !$multiplo5){
			echo $contador."<br>"; 
		}
	}
?>
