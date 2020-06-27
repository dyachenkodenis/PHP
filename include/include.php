<?php


//requare()
require('../files/inc1.php');

//include()
include('../files/inc2.php');

//require_once()
require_once('../files/inc1.php'); /* The rwquire_once() statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. */

//include_once()
include_once('../files/inc2.php'); /* The include_once() statement includes and evaluates the specified file during the execution of the script. This is a behavior similar to the include statement, with the only difference being that if the code from a file has already been included, will not be included again, and include_once() returns TRUE. */

//set_include_path()
set_include_path('../files/');
include('inc2.php');

//get_include_path()
echo get_include_path();

//restore_include_path()
restore_include_path();
@include('inc2.php'); // output error

//get_included_files();
include('../files/inc2.php');
require('../files/inc1.php');
get_included_files(); // alias of get_require_files()