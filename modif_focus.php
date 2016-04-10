<?php
	if(!$_POST['name'] || !$_POST['link'] || !$_POST['description'] || !$_POST['price'] ||  !$_POST['actual'] || $_POST['submit'] != "OK" || !$_POST['dest'] || !$_POST['cat'])
	{
		echo"ERROR\n";
		exit;
	}
	else
	{
	$actual = $_POST['actual'];
	$name = $_POST['name'];
	$link = $_POST['link'];
	$description =  $_POST['description'];
	$price = $_POST['price'];
	$dest = $_POST['dest'];
	$cat = $_POST['cat'];
		if(file_exists("database/element"))
		{
			$mytab = array($tbl);
			$mytab= unserialize(file_get_contents("database/element"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['name'] === $actual)
				{
					$mytab[$i]['name'] = $name;
					$mytab[$i]['link'] = $link;
					$mytab[$i]['price'] = $price;
					$mytab[$i]['description'] = $description;
					$mytab[$i]['destination'] = $dest;
					$mytab[$i]['cat'] = $cat;
				}
				$i++;
			}
		$mytab = serialize($mytab);
		file_put_contents("database/element",$mytab);
		header('location: index.php');
		}
	}
?>