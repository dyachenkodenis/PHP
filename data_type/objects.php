<?php

class coffe{
	function my_coffe(){
		echo "Cappuccino";
	}
}

$coffe = new coffe;
$coffe->my_coffe();

$obj = (object) 'Test';
var_dump($obj->scalar);


