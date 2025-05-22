<?php

# HTML markups works in PHP, HTML markups can surround <?php tags to make HTML stuff
	echo "Hello World";
// echo slightly faster than print, but it doesn't return a value
	/* 
		multiline comment
	*/
	print "Hello World";

	/* VARIABLES
		-Prefix $ 
		-start with letter or underscore _ 
		-only letters, numbers and underscores
		-Case sensitive


		DATA TYPES
			-strings "rgdrg" 'rgrdg'
			-Integer -5 5 68
			-Float 5.2 7.3
			-Booleans True False
			-Arrays
			-Objects
			-NULL
			-Resource

		CONSTANT

			- prefix define 
			- first param is the name of the constant
			- Second param is what the constant while do or say
			- Third param (true or false), to make the constant case sensitive or not (default: False (aka case sensitive))
			- NOT going to change
	*/

	$num1 = 5;
	$num8 = 6;
	$sum = $num1 + $num8;
	echo $sum;

	$string1 ="Pop";
	$string2 ="Pap";
	$grettings = $string1.$string2;
	echo $grettings;

	$output ="Hello WOrld";
	echo $output;

	$grettings1 = '$string1 $string2';
	echo $grettings1;
	#" " take in consideration the variables while ' ' doesn't take in consideration
 	$grettings2 = "$string1 $string2";
	echo $grettings2;

	$string3 = 'They\'re Here';
	$string4 = "They're Here";
	//to make ' appear in a string without being used as a PHP code, use backslash \ or just put it in "" to make it work

	define("GREET", "Hello Everyone");
	echo GREET;
?>
