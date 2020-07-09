<?php

//exec()
echo exec('whoami');

//passthru()
passthru('whoami');

//shell_exec()
$test = shell_exec('ls -a');
echo "$test";

//system()
$test1 = system('ls');
echo $test1;