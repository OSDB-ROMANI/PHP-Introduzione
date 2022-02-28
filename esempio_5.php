<?php
	$lista = array(1,2,"ciao");
	$lista2 = array(
		"nome" => "Paolo",
		"colore" => "verde",
		1 => 5
	);
	echo "ARRAY INDICE NUMERO</br>";
	print_r ($lista);
	echo "</br>ARRAY ASSOCIATIVO</br>";
	print_r ($lista2);
	echo "</br>AGGIUNGO ELEMENTI ALLA LISTA</br>";
	array_push($lista, 5,6);	
	print_r ($lista);
	echo "</br>AGGIUNGO ELEMENTI ALLA LISTA2</br>";
	$lista2 +=["s"=>56,2=>"oggi"];	
	print_r ($lista2);	
	
?>