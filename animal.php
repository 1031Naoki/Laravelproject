<?php

 class Animal {
	 public $cry = "bowbow!";

	 function bow () {
		 echo "bowbow!" .PHP_EOL;
	 }
 }

$animal_1 = new animal () ;

$animal_1 -> bow();
?>

