<?php


	// =======================================================
	// EXEMPLO 01
	// =======================================================

	// importante não esquecer de colocar o ponto e vírgula
	// depois da definição da função

	$multiplica = function( $a, $b ){
		echo "<br/>";
		return $a * $b;
	}; // ponto e vírgula 

	echo $multiplica(2,2);

	// =======================================================
	// EXEMPLO 02 - Executando como callback
	// =======================================================

	function executaCallback($calback){
		echo "<br/>";
		echo $calback(4,8);
	}

	executaCallback($multiplica);


	// =======================================================
	// EXEMPLO 03 - Executando callback como parametro
	// =======================================================
	executaCallback(function($a, $b){
		return $a + $b;
	});



?>