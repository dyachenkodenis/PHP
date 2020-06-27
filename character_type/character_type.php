<?php

//ctype_alnum()
$string = array("dcdv456v56j11w", "rtg$%2f8*#x)");
foreach($string as $value){
	if(ctype_alnum($value)){
		echo "The string '$value' consists of all leters or digits. <br />";
	}else{
		echo "The string '$value' does not consist of all letters or digits. <br />";
	}
}

//ctype_alpha()
$string1 = array("wdefrgbhn", "dcdc53cd6t8c");
foreach($string1 as $value1){
	if(ctype_alpha($value1)){
		echo "The string '$value1' consists of all letters.<br />";
	}else{
		echo "The string '$value1' does not consist of all letters. <br />";
	}
}

//ctype_cntrl()
$string2 = array('string_1' => "\n\r\t", 'string_2' => "fv54v5");
foreach($string2 as $key => $value2){
	if(ctype_cntrl($value2)){
		echo "The string '$key' consists of on control characters.<br />";
	}else{
		echo "The string '$key' does not consist of all control characters.<br />";
	}
}

//ctype_digit()
$string3 = array("3.456", "456667", "567dfvfv5433");
foreach($string3 as $value3){
	if(ctype_digit($value3)){
		echo "The string '$value3' consists of all digits. <br />";
	}else{
		echo "The string '$value3' does not consist af all digits.<br />";
	}
}

//ctype_graph()//
$string4 = array("string_1"=>"rfrf\n\r\t", "string_2"=>"fvfv65", "string_3"=>"vfv*a&^93");
foreach($string4 as $name => $value4){
	if(ctype_graph($value4)){
		echo "The string '$name' consists of all (visibly) printable characters.<br />";
	}else{
		echo "The string '$name' does not consist of all (visibly) printable characters.<br />";
	}
}

//ctype_lower()
$string5 = array("rfrfr45r5", "cdcddv", "cdcERV");
foreach($string5 as $value5){
	if(ctype_lower($value5)){
		echo "The string '$value5' consists of all lowercase letters.<br />";
	}else{
		echo "The string '$value5' does not consist of all lowercase letters. <br />";
	}
}

//ctype_print()
$string6 = array("dcdc\n\t\r", "ddvf55", "dcd79&sx#$@");
foreach($string6 as $value6){
	if(ctype_print($value6)){
		echo "The string '$value6' consists of all printable characters.<br />";
	}else{
		echo "The string '$value6' does not consist of all printable characters. <br />";
	}
}

//ctype_punct()
$string7 = array("dcdf34#$", "#$ #$^!", "*&%#$@");
foreach($string7 as $value7){
	if(ctype_punct($value7)){
		echo "The string '$value7' consists of all punctuation.<br />";
	}else{
		echo "The string '$value7' does not consist of all punctuation.<br />";
	}
}

//ctype_space()
$string8 = array(
	'string_10' => "\n\r\t", 
	'string_20' => "\nfvfv12",
	'string_30' => '\n\r\t' //note the single quotes
				);
foreach($string8 as $name => $value8){
	if(ctype_space($value8)){
		echo "The string '$name' consists of whitespace characters only.<br />";
	}else{
		echo "The string '$name' contains non-whitespace characters.<br />";
	}
}

//ctype_upper()
$string9 = array("EDEVVGBG", "DCDCF655", "dfvfvfv");
foreach($string9 as $value9){
	if(ctype_upper($value9)){
		echo "The string '$value9' consists of all uppercase latters.<br />";
	}else{
		echo "The string '$value9' does not consist of all uppercase letters.<br />";
	}
}

//ctype_xdigit()
$string10 = array("ab1043bc99", "ar54g67", "AB12C95");
foreach($string10 as $value10){
	if(ctype_xdigit($value10)){
		echo "The string '$value10' consists of all hexadecimal digits.<br />";
	}else{
		echo "The string '$value10' does not consist of all hexadecimal digits.<br />";
	}
}

