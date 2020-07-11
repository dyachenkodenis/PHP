<?php

//basename()
$test = "files/inc3.php";
echo basename($test);
echo basename($test, ".php");

//chgrp()
@chgrp("files/inc4.php", "admin");

//chmod()
@chmod("inc4.php", 0600);

//chown()
@chown("../files/inc4.php", "Tom");

//copy()
copy('../files/inc4.php', '../files/inc5.php');

//disk_free_space()
@disk_free_space("C:"); // for Windows

//disk_total_space()
@disk_total_space("C:"); //for Windows

//file_exists()
echo file_exists("../files/inc3.php");

//file_get_contents()
$test1 = file_get_contents("../files/inc3.php");
echo $test1;

//file_put_contents()
$test2 =file_put_contents("../files/inc3.php", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quasi.");
echo $test2;

//file()
print_r(file("../files/inc3.php"));

//filesize()
$test3 = filesize("../files/inc3.php");
echo $test3;

//rename()
rename('../files/inc5.php', '../files/inc6.php');

//stat()
$test4 = stat('../files/inc3.php');
print_r($test4);
echo $test4['size'];

//tempnam()
@tempnam('../files/inc4.php', "TMPO");

//fnmatch()
$test5 = "Lorem ipsum dolor sit amet.";
if(fnmatch("*dol[or]", $test5)){
	echo "hohoho..";
}

//glob()
print_r(glob("*.php"));

//link()
$test6 = '../files/inc4.php';
$test7 = '../files/inc5.php';
@link($test6, $test7);

//symlink()
$test8 = '../files/inc7.php';
$test9 = '../files/inc7';
@symlink($test8, $test9);
echo readlink($test9);

//linkinfo()
echo linkinfo('../files/inc7');

//readlink()
echo readlink('../files/inc7');

//realpath()
echo realpath('../files/inc7.php');

//move_uploaded_file()
/*
$uploads_dir = '/uploads';
foreach($_FILES["pictures"]["error"] as $key => $error){
	if($error == UPLOAD_ERR_OK){
		$TMP_NAME = $_FILES["pictures"]["tmp_name"][$key];
		$name = basename($_FILES["pictures"]["tmp_name"][$key]);
		move_uploaded_file($tmp_name, "$uploads_dir/$name");
	}
}
*/

//parse_ini_file()
print_r(parse_ini_file('../files/test.ini'));

//parse_ini_string()
print_r(parse_ini_string('../files/test.ini'));

//pathinfo()
print_r(pathinfo('../files/test.ini'));

//readfile()
echo readfile('../files/inc3.php');

//touch()
/*
$test10 = '../files/test.ini';
if(touch($test10)){
	echo $test10 . " modification time has been changed to present time";
}else{
	echo "Sorry, could not change modification time of ". $test10;
}
*/

//umask()
echo(umask());

//unlink()
unlink('../files/inc7');

//fileatime()
echo fileatime('../files/test.ini');

//filemtime()
echo filemtime('../files/test.ini');

//filegroup()
echo filegroup('../files/test.ini');

//fileinode()
echo fileinode('../files/test.ini');

//fileowner()
echo fileowner('../files/test.ini');

//fileperms()
echo fileperms('../files/test.ini');

//filetype()
echo filetype('../files/test.ini');

//is_dir()
$test11 = ('../files/test.ini');
if(is_dir($test11)){
	echo 'true';
}else{
	echo 'false';
}

//is_executable()
$test12 = '../files/test.ini';
if(is_executable($test11)){
	echo "true";
}else{
	echo "false";
}

//is_file()
$test12 = '../files/test.ini';
if(is_file($test12)){
	echo "true";
}else{
	echo "false";
}

//is_link
$test12 = '../files/test.ini';
if(is_link($test12)){
	echo "true";
}else{
	echo "false";
}

//is_readable()
$test12 = '../files/test.ini';
if(is_readable($test12)){
	echo "true";
}else{
	echo "false";
}

//is_uploaded_file()
$test12 = '../files/test.ini';
if(is_uploaded_file($test12)){
	echo "true";
}else{
	echo "false";
}

//is_writeable() the function is an alias of the is_writable()
$test12 = '../files/test.ini';
if(is_writable($test12)){
	echo "true";
}else{
	echo "false";
}



