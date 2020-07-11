<?php

//count_chars()
$test = "Lorem ipsum dolor sit amet.";
echo count_chars($test, 3);
/*The parameter "mode 3" will return a string withall the different characters used. In this example, the characters used in "Lorem ipsum dolor sit amet"*/

//levenshtein()
echo levenshtein("Hello, World!", "ello, Wirld");

echo levenshtein("Hello, World!", "ello, World", 10, 20, 30);

//similar_text()
echo similar_text("Hello, World!", "Hello, Piter!");

//soundex()
$test1 = "Hello";
echo soundex($test1);

//metaphone()
echo metaphone("World");

//echo()
echo "Hello, World!";

//ltrim()
$test2 = "Hello, World!";
echo $test2;

echo ltrim($test2, "Hello");

//rtrim()
echo rtrim($test2, "World!");

//trim()
echo trim($test2, "Hed");

//str_repeat()
echo str_repeat("-=", 10);

//str_rot13()
echo str_rot13("Hello, World!");

//str_shuffle()
echo str_shuffle("Hello, World!");

//strpos()
echo strpos("Lorem ipsum dolor sit amet.", "sit");

//stripos()
echo stripos("Lorem ipsum dolor sit amet.", "sit");

//strrpos()
echo strrpos("Lorem ipsum dolor sit amet.", "sit");

//strrchr()
echo strrchr("Lorem ipsum dolor sit amet.", "sit");

//strstr()
echo strstr("Hello, World", "World");
$email = 'name@example.com';
$domain = strstr($email, '@');
echo $domain;
$user = strstr($email, '@', true);
echo $user;

//stristr()
echo stristr("Hello, World!", "WORLD");
echobr();

//str_replace()
echo str_replace("World", "Peter", "Hello, World!");

//str_pad()
echo str_pad($test2, 20, "-");
echo str_pad($test2, 20, ".");

//str_word_count()
echo str_word_count("Hello, World!");

//strcspn()
echo strcspn("Hello, World!", "w");
echo strcspn("Hello, World!", 0,6);

//strspn()
echo strspn("Hello, World!", "kHlleo");

//strpbrk()
echo strpbrk("Hello, World!", "oe");

//strlen()
echo strlen("Hello, World!");

//strrev()
echo strrev("Hello, World!");

//strtolower()
echo strtolower("Hello, World!");

//strtoupper()
echo strtoupper("Hello, World!");

//ucfirst()
echo ucfirst("hello, world!");

//ucwords()
echo ucwords("hello, world!");

//strtr()
echo strtr("Hilla, Warld!", "ia", "eo");

//substr()
echo substr("Hello, World!",6);

//substr_replace()
echo substr_replace("Hello", "World!", 0);

//substr_count()
echo substr_count("Hello, World! The World is nice.", "World");

//wordwrap()
$test3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque architecto quo eos.";
echo wordwrap($test3, 15, "<br />");






