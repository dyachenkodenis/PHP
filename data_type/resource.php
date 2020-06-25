<?php

$resource = fopen('https://google.com/', 'r');
var_dump(is_resource($resource));
var_dump(is_scalar($resource));