<?php

//strcmp()
echo strcmp("Hello, World!", "Hello, World!");
/*If this function returns 0, the two strings are equal.*/

//strcasecmp()
echo strcasecmp("Hello, World!", "HELLO, WORLD!");

//strnatcmp()
echo strnatcmp("2Hello, World!", "10Hello, World!");
echo "<br />";
echo strnatcmp("10Hello, World", "2Hello, World!");

//strnatcasecmp()
echo strnatcasecmp("2Hello, world!", "10Hello, WORLD!");
echo "<br />";
echo strnatcasecmp("10Hello, world!", "2Hello, WORLD!");

//strncmp()
echo strncmp("Hello, World!", "Hello, earth!", 6);

//strncasecmp()
echo strncasecmp("Hello, World!", "Hello, earth!",6);

//strcoll()
setlocale(LC_COLLATE, 'NL');
echo strcoll("Hello, World!", "Hello, World!");
setlocale(LC_COLLATE, 'en_US');
echo strcoll("Hello, World!", "Hello, World!");

//substr_compare()
echo substr_compare("Hello, World!", "Hello, World!", 0);