<?php
session_start(); 
	function print_panier()
	{
		if($_SESSION['panier'])
		{
		$total = "0";
		$nbitem = "0";
		 $mytab= unserialize(file_get_contents("database/element"));
		foreach ($_SESSION['panier'] as $elem)
		 {
		 	$name = $elem['name'];
		 	foreach($mytab as $thename)
		 	{
		 		if($name === $thename['name'])
		 		{			
		 		$link = $thename['link'];
		 		$price = $thename['price'];
		 		$name= $thename['name'];
				$des = $thename['description'];
				$nb = $elem['nb'];
				$result = $price * $nb;
				$total += $result;
				$nbitem += $nb;
				$_SESSION['price'] = $total;
					echo"<div class= 'dataelem'><img class = 'imgelem' SRC = $link><span id='txt'>$des</span><span id='priceux'>Price: <br /> $result €</span><span id='nbelem'>Quantiter: $nb</span></div>";
		 		}
		 	}
		}
		}
		echo"<span id='total'>Total on $nbitem item: $total €</span>";
	}
?>