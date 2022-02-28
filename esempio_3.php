<?php
	echo "PER VALORE</br>";
    $var1 = 10;
    $var2 = $var1;
	echo "var1: $var1 - var2: $var2</br>";
	$var1 = 20;
	echo "var1: $var1 - var2: $var2</br>";
	echo "PER RIFERIMENTO</br>";
    $var1 = 10;
    $var2 = &$var1;
	echo "var1: $var1 - var2: $var2</br>";
	$var1 = 20;
	echo "var1: $var1 - var2: $var2</br>";
?>