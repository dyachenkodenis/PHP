<?php

// 	Scalar types:
$a_bool	= true;
$a_str	= "abc";
$a_int = 12;
$a_float = 12.5;
echo "<br />" . $a_bool . " = " . gettype($a_bool);	// boolean
echo "<br />" . $a_str . " = " . gettype($a_str);	// string
echo "<br />" . $a_int . " = " . gettype($a_int);	// integer
echo "<br />" . $a_float . " = " . gettype($a_float);	// double

// Compound types:
$a_arr 		= array('Cappuccino' => "<img src='/files/Cappuccino.jpg' alt='Cappuccino' width='100px'>",
					'Espresso' 	 => "<img src='/files/Espresso.jpg' alt='Espresso' class='coffe'>");
echo "<br />" . print_r($a_arr) . " = " . gettype($a_arr);	// array

class cappuccino {
	function a_cappuccino(){
		echo "<img src='/files/Cappuccino.jpg' alt='Cappuccino' class='coffe'>";
	}
}

$a_obj		= new cappuccino;
$a_obj		->a_cappuccino();
echo "<br />" . print_r($a_obj) . " = " . gettype($a_obj);	// object

/* $a_callable and $a_aterable*/

//...

// Special types:

//...
