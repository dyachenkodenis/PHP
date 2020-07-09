<?php

//connection_aborted()
function check_abort(){
	if(connection_aborted())
		error_log("Script $GLOBALS[SCRIPT_NAME]". 
			"$GLOBALS[SERVER_NAME] was aborted by the user. ");
	//Some script to be executed here 
	//Call the check_abort function when the script ends
	register_shutdown_function("check_abort");
}

//connection_status()
switch(connection_status()){
	case CONNECTION_NORMAL:
	$test = 'Connection is in normal state';
	break;
	case CONNECTION_ABORTED:
	$test = 'Connection aborted';
	break;
	case CONNECTION_TIMEOUT:
	$test = 'Connection timed out';
	break;
	case(CONNECTION_ABORTED & CONNECTION_TIMEOUT):
	$test = 'Connection aborted and timed out';
	break;
	default:
	$test = 'Uncnown';
	break;
}
echo $test;

//exit()
$test1 = 'https://google.com/';
fopen($test1, "r")
or exit("Unable to connect to $test1");

//eval()
$test2 = "'one'";
$test3 = "'two'";
$mystring = 'Lorem ipsum dolor sit $test2 amet, consectetur adipisicing elit. $test3 Fugit, itaque.';
echo $mystring . "<br />";
eval("\$mystring = \" $mystring\";");
echo $mystring . "<br />";

//highlight_file()
highlight_file('../files/inc1.php');

//highlight_string()
highlight_string("<?php echo 'Hello, World!'; ?>");

//php_strip_whitespace()
echo php_strip_whitespace('../files/inc1.php');

//usleep()
echo date('H:i:s');
usleep(1000000);
echo date('H:i:s');

//sleep()
echo date('H:i:s');
sleep(3);
echo date('H:i:s');

//time_nanosleep()
if(time_nanosleep(2,500000000)){
	echo "Slept for 2,5 seconds";
}

//time_sleep_until()
time_sleep_until(time()+3);
echo "Hello";

//sys_getloadavg()
$test4 = sys_getloadavg();
if($test4[0]>0.80){
	die('Sorry, server is busy');
}

