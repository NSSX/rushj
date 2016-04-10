<?php
session_start();
	if($_POST['submit'] != "OK" || $_POST['price'] === "0")
	{
		header('location: panier.php');
		exit;
	}
	if(!$_SESSION['login'])
	{
		header('location: inscription.php');
		exit;
	}
	else
	{
	$tbl = array("name" => $_SESSION['login'], "price" => $_POST['price']);
		if(!file_exists("commande"))
		{
			mkdir("commande",0777);
			$mytab = array($tbl);
		}
		else
		{
			$mytab= unserialize(file_get_contents("commande/user"));
			$mytab []= $tbl;
		}
		$mytab = serialize($mytab);
		file_put_contents("commande/user",$mytab);
		unset($_SESSION['panier']);
		header('location: index.php');
	}
?>