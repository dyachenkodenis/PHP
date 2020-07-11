<?php

//chdir()
echo getcwd();
chdir("../files/uploads");
echo getcwd();

//chroot()
/*
chroot("/files/uploads");
echo getcwd();
This function is only available to GNU and BSD systems, and only when using the CLI, CGI or Embed SAPI. Also, this function requires root privileges.
*/
if(function_exists("chroot")){
	echo "Function works!";
}else{
	echo "Function does not work!";
}

//dir()
$test = dir(getcwd());
echo "Handle: " . $test->handle . "<br />";
echo "Path: " . $test->path . "<br />";
while(($file = $test->read()) !== false){
	echo "filename: " . $file . "<br />";
}
$test->close();

//opendir()
$test1 = "/";
if(is_dir($test1)){
	if($dh = opendir($test1)){
		while(($file = readdir($dh)) !== false){
			echo "filename: " . $file . "<br />";
		}
		closedir($dh);
	}
}

//getcwd()
echo getcwd();

//readdir()
$test2 = "/";
if(is_dir($test2)){
	if($dh1 = opendir($test2)){
		while(($file = readdir($dh1)) !== false){
			echo "filename: " . $file . "<br />";
		}
		closedir($dh1);
	}
}

//rewinddir() and closedir()
$test3 = "/";
//Open a directory, and read its contents
if(is_dir($test3)){
	if($dh2 = opendir($test3)){
		//List files in images directory
		while(($file = readdir($dh2)) !== false){
			echo "filename: " . $test3 . "<br />";
		}
		rewinddir();
		//List once again files in images directory
		while(($file = readdir($dh2)) !== false){
			echo "filename: " .$file. "<br />";
		}
		closedir($dh2);
	}
}

//scandir()
$test3 = '/';
$test4 = scandir($test3, 1);
print_r($test4);

//dirname()
echo dirname('../files/inc3.php');

//is_dir()
$test5 = '/';
if(is_dir($test5)){
	echo "true";
}else{
	echo "false";
}

//mkdir()
mkdir('download'); //files/uploads/download

//rmdir()
$test6 = "download";
if(!rmdir($test6)){
	echo 'Could notremove $test6';
}
