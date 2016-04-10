<?php
session_start(); 
	function print_history()
	{
		if(file_exists("commande/user"))
		{
		 $mytab= unserialize(file_get_contents("commande/user"));
		foreach ($mytab as $elem)
		 {
		 	$name = $elem['name'];
		 	$price = $elem['price'];
		 	echo"<div class='dataelem2'><i id='inpolice'>$name -------------->Price: $price EURO</i></div>";
		}
		}
	}
?>