<?php
session_start();
$name = $_POST['name'];

$tbl = array("name" => $name, "nb" => "1");
$i=0;
if($_SESSION['panier'])
{
foreach($_SESSION['panier'] as $elem)
{
	if($elem['name'] === $name)
	{
		$_SESSION['panier'][$i]['nb'] += "1";
		header('location: panier.php');
		exit;
	}
	$i++;
}
}
$_SESSION['panier'] []= $tbl;
header('location: panier.php');
?>